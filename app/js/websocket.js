var markerdata = [];
//var marker {};

if ("WebSocket" in window) {
  ws = new WebSocket("ws://localhost:81/");

  ws.onopen = function () {
    console.log("Connection established");
  };

  ws.onmessage = function (e) {
    data = JSON.parse(e.data);

    if(data.message != "duplicate"){
      if(data.type == "emergency"){
        var msg = createnotifmessage(data);
        mePin(data, createMarkerMessage(data));
        shownotif(msg, data.message.has_message);
      }
      else{
        console.log(data.message);
      }
    }
  };

  ws.onclose = function () {
    console.log("Connection closed...");
  };
}

//FUNCTIONS


function shownotif(message,ntype) {
    //type = ['', 'info', 'danger', 'success', 'warning', 'rose', 'primary'];
    //color = Math.floor((Math.random() * 6) + 1);
     var type = ntype ? 'warning' : 'danger';

    $.notify({
      icon: "report",
      message: message

    }, {
      type: type,
      timer: 0000,
      placement: {
        from: 'top',
        align: 'right'
      }
    });
  }

      
function mePin(data, messagestring){
  
  var customOptions =
    {
      'maxWidth': '500',
      'className' : 'custom'
    }
  var icon_color = data.message.has_message ? 'orange' : 'red';
  var pulsingIcon = L.icon.pulse({iconSize:[20,20],color:icon_color});
  var marker = L.marker([data.location.lat, data.location.long], {icon: pulsingIcon}).bindPopup(messagestring, customOptions).addTo(map);
  map.panTo(marker.getLatLng());
}


function createMarkerMessage(data){
  if(data.message.has_message){
      var image = new Image();
      image.src = data.message.image;

      messagestring = "<h6>Emergency</h6><hr>" +
      "<p><b>Emergency No. "+ data.emergency_id +" </b><br>" +
      "Reporter's Details:<br>" +
      "Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no  +
      "<br><br><b>Report Details: </b><br>"+ data.message.message +"<br><br>" +
      "<b>Report Image Attachment: </b><br><br> <img onclick=\"window.open(this.src)\" id= \"myImg\" src=\"data:image/jpeg;base64,"+ data.message.image+"\" style=\"max-width:30%;max-height:30%;width: auto; height: auto;\"/>" + 
      "<button class=\"btn btn-success btn-sm\" value = \'" + JSON.stringify(data) + "\'  onclick=\"call(this)\" class=\" btn btn-primary \" id=\"btn_call\">Call</button>";

    }
    else{
      messagestring = "<h6>Emergency</h6><hr>" +
      "<p>Emergency No. "+ data.emergency_id +" <br><br>" +
      "Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no +"</p>" +
      "<button class=\"btn btn-success btn-sm\" value = \'" + JSON.stringify(data) + "\'  onclick=\"call(this)\" class=\" btn btn-primary \" id=\"btn_call\">Call</button>";
  
    }

    return messagestring;
}

function createnotifmessage(data){
    
    if(data.message.has_message){
      var image = new Image();
      image.src = data.message.image;

      messagestring = "<h6>Emergency</h6><hr>" +
      "<p><b>Emergency No. "+ data.emergency_id +" </b><br>" +
      "Reporter's Details:<br>" +
      "Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no  +
      "<br><br><b>Report Details: </b><br>"+ data.message.message +"<br><br>" +
      "<b>Report Image Attachment: </b><br><br> <img onclick=\"window.open(this.src)\" id= \"myImg\" src=\"data:image/jpeg;base64,"+ data.message.image+"\" style=\"max-width:30%;max-height:30%;width: auto; height: auto;\"/>" +
      "</p> <button value = \'" + JSON.stringify(data) + "\'  onclick=\"viewonmap(this)\" class=\"btn btn-info btn-sm\" >Map</button>" + 
      "<button class=\"btn btn-success btn-sm\" value = \'" + JSON.stringify(data) + "\'  onclick=\"call(this)\" class=\" btn btn-primary \" id=\"btn_call\">Call</button>";

    }
    else{
      messagestring = "<h6>Emergency</h6><hr>" +
      "<p>Emergency No. "+ data.emergency_id +" <br><br>" +
      "Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no +"</p>" +
      "<button value = \'" + JSON.stringify(data) + "\'  onclick=\"viewonmap(this)\" class=\"btn btn-info btn-sm\" >Map</button>" +
      "<button class=\"btn btn-success btn-sm\" value = \'" + JSON.stringify(data) + "\'  onclick=\"call(this)\" class=\" btn btn-primary \" id=\"btn_call\">Call</button>";
  
    }

    return messagestring;
}


function viewonmap(btn){
  data = JSON.parse(btn.value);
  map.setView([data.location.lat, data.location.long], 30);
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
  var data = {
    emergency_id: eid
  }

  var options = {
    url: "app/webservice/update_emergency_status.php",
    dataType: "text",
    type: "POST",
    data: { jsontext: JSON.stringify( data ) },
    success: function( data, status, xhr ) {
       console.log(data);
       if(data == 1){

       }
       else{

       }
    },
    error: function( xhr, status, error ) {
        console.log(error);
    }
  };
  $.ajax( options );

}



