if ("WebSocket" in window) {
  ws = new WebSocket("ws://localhost:81/");

  ws.onopen = function () {
    console.log("Connection established");
  };

  ws.onmessage = function (e) {
    data = JSON.parse(e.data);
    console.log(data.result);
            
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
  // specify popup options 
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
      "<p><b>Reporter's Details:<br> </b>" +
      "Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no +"</p>" +
      "<b>Report Details: </b><br>"+ data.message.message +"</p>" +
      "<b>Report Image Attachment: </b><br><br> <img onclick=\"window.open(this.src)\" id= \"myImg\" src=\"data:image/jpeg;base64,"+ data.message.image+"\" style=\"width:80%;height:80%;\"/>" +
      "</p>" +
      "<center><button  onclick=\"call()\" class=\" btn btn-primary \" id=\"btn_call\">Call</button></center>";
    }
    else{
      messagestring = "<center><h6><span style=\"color:red\">Emergency</span></h6></center><hr>" +
      "<p>Name: "+ data.user_details.fullname +"<br>"+
      "Gender: "+ data.user_details.gender +"<br>"+
      "Contact No.: "+ data.user_details.contact_no +"</p>" +
      "<center><button  onclick=\"call()\" class=\" btn btn-primary \" id=\"btn_call\">Call</button></center>";  
    }

    var pulsingIcon = L.icon.pulse({iconSize:[20,20],color:'red'});
    var marker = L.marker([data.location.lat, data.location.long],{icon: pulsingIcon}).bindPopup(messagestring, customOptions).addTo(map);
      map.panTo(marker.getLatLng());
    }


function call(){
  ws.send('{"type":"message", "contact_no":"09293737890", "message":"charaaaan"}');
}


