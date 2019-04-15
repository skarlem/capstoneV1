if ("WebSocket" in window) {
  ws = new WebSocket("ws://localhost:81/");

  ws.onopen = function () {
    console.log("Connection established");
  };

  ws.onmessage = function (e) {
    //console.log(e);
    data = JSON.parse(e.data);
    
            
    if(data.type == "emergency"){
      mePin(data);
    }
    else{
      console.log(data.message);
    }

  };

  ws.onclose = function () {
    console.log("Connection closed...");
  };
}


      

function mePin(data){
  
  var customOptions =
    {
      'maxWidth': '500',
      'className' : 'custom'
    }
    var messagestring;

    if(data.message.has_message){
      var image = new Image();
      image.src = data.message.image;

      messagestring = "<center><h6><span style=\"color:red\">Emergency</span></h6></center><hr>" +
      "<p><b>Emergency No. "+ data.emergency_id +" </b><br>" +
      "Reporter's Details:<br>" +
      "Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no  +
      "<br><b>Report Details: </b><br>"+ data.message.message +"<br>" +
      "<b>Report Image Attachment: </b><br><br> <img onclick=\"window.open(this.src)\" id= \"myImg\" src=\"data:image/jpeg;base64,"+ data.message.image+"\" style=\"width:500px;height:500px;\"/>" +
      "</p>" +
     "<center><button value = \'" + JSON.stringify(data) + "\'  onclick=\"call(this)\" class=\" btn btn-primary \" id=\"btn_call\">Call</button></center>";
    }
    else{
      messagestring = "<center><h6><span style=\"color:red\">Emergency</span></h6></center><hr>" +
      "<p>Emergency No. "+ data.emergency_id +" <br><br>" +
      "Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no +"</p>" +
      "<center><button value = \'" + JSON.stringify(data) + "\'  onclick=\"call(this)\" class=\" btn btn-primary \" id=\"btn_call\">Call</button></center>";  
    }

    var icon_color = data.message.has_message ? 'orange' : 'red';

    var pulsingIcon = L.icon.pulse({iconSize:[20,20],color:icon_color});

    var marker = L.marker([data.location.lat, data.location.long],{icon: pulsingIcon}).bindPopup(messagestring, customOptions).addTo(map);
      map.panTo(marker.getLatLng());
    }


function call(btn){
  data = JSON.parse(btn.value);
  data.type = 'call_to_user';
  update_emergency(data.emergency_id);

  var jsonobj = '{"type":"' + data.type + '",' +
  '"contact_no":"'+ data.user_details.contact_no +'",' +
  '"emergency_id":"' + data.emergency_id + '"}';


  ws.send(jsonobj);

}

function update_emergency(eid){
  $.ajax({
    type: 'POST',
    url : 'app/webservice/update_emergency_status.php',
    dataType: "json",
    data: {
      emergency_id: eid
    },
    success : function(response){
      console.log(response);
    }
  });
}



