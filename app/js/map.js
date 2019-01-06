var map;
var marker;
var finalMarkers=[];
var markers;
var layer;
var latitude;
var longitude;
var crime_type_value=['0001','0010','0011','0100','0101'];
var types=['Theft','Animal Bite','Vehicular Incident','Fire','Physical Injury', 'Sexual Assault'];

var theftIcon = L.icon({
    iconUrl: './assets/img/theft.png',
});
var injuryIcon = L.icon({
    iconUrl: './assets/img/physical-injury.png',
    
});

var sexualAssaultIcon = L.icon({
    iconUrl: './assets/img/eut.png',

});
var animalBiteIcon = L.icon({
    iconUrl: './assets/img/animal-bite.png',

});
var fire = L.icon({
    iconUrl: './assets/img/fire.png',
    
});
var vehicularIncidentIcon = L.icon({
    iconUrl: './assets/img/vehicular-incident.png',
   
  });
function loadbyDate(){
    var startDate = document.getElementById('dp1').value;
    var endDate = document.getElementById('dp2').value;

     $('#dp1').on('dp.change', function(e){ 
        startDate=0;
     
        startDate= document.getElementById('dp1').value; 
     //   $.post('controller_map/controller2.php', {var1: startDate, var2: endDate});
        
    });
     $('#dp2').on('dp.change', function(e){
        startDate=0; 
        endDate= document.getElementById('dp2').value; 
      //  $.post('controller_map/controller2.php', {var1: startDate, var2: endDate});
    });
      console.log(endDate);
      console.log(startDate);
    //  $.post('controller_map/controller.php', {var1: startDate, var2: endDate});
        getMarkers2();
     
}
function loadMarkersbyType(){
    var crime_type= document.getElementsByName('search_by_type');
    var counter =0;
    var endDate = new Date(document.getElementById('dp2').value);
    var startDate = new Date(document.getElementById('dp1').value);
        for( var x=0; x<crime_type.length; x++){
             if(crime_type[x].checked){
                    finalMarkers[x]=crime_type[x].value;
             } 
              else{
                finalMarkers[x]=0;
             }   
        }
        console.log(finalMarkers);
         console.log(counter);
      
}
function initMap(){
    var location = '';
            map= L.map(document.getElementById("map")).setView([6.06622,125.12530], 18);
                mapLink = 
                        '<a href="http://openstreetmap.org">OpenStreetMap</a>';
                L.tileLayer(
                        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: 'Map data &copy; ' + mapLink,
                        maxZoom: 25,
                        }).addTo(map);
               map.on('click', onMapClick);
               getMarkers2();
  
}
function clearMarkers(){
   map.eachLayer(function (layer) {
         map.removeLayer(layer);
        });
   map.remove();
    initMap();
   
}

// get images per marker type
function loadMarkerImg(jsonMap2,i,button,button2,popupOptions)

    {
                if(jsonMap2[i][3]=='Theft'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon}) 
                      .bindPopup("<strong>Type: Theft"+"<br>"+
                       "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2,popupOptions); 
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][3]=='Robbery'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon})
                      .bindPopup("<strong>Type: Robbery"+"<br>"+
                            "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2,popupOptions); 
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][3]=='Physical Injury'){
                       marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: injuryIcon})
                       .bindPopup("<strong>Type: Physical Injury"+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2,popupOptions); 
                       layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][3]=='Fire Incident'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire})
                      .bindPopup("<strong>Type:Fire"+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2); 
                     layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][3]=='Rape'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon})
                      .bindPopup("<strong>Type: "+jsonMap2[i][3]+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2) ; 
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][3]=='Animal Bite'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: animalBiteIcon})
                      .bindPopup("<strong>Type: "+jsonMap2[i][3]+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2); 
                     layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][3]=='Vehicular Accident'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon})
                      .bindPopup("<strong>Type: "+jsonMap2[i][3]+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2); 
                    layer = L.layerGroup([marker]).addTo(map); 
                   }
                 
}


//load the markers
function getMarkers2(){
  loadMarkersbyType();
  var endDate = new Date(document.getElementById('dp2').value);
  var startDate = new Date(document.getElementById('dp1').value);
   var crime_type= document.getElementsByName('search_by_type');
   var button = ' <br><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</button>';
   var button2 = ' <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Remove </button>';
  
   var popupOptions ={
    'maxWidth': '2000',
    'className' : 'popupCustom' // classname for another popup
  }
  
   if (startDate > endDate) {
    demo.showNotification('top','right',"Starting date must be greater than ending date");
   }
  else{
     var counter =0;
      console.log(endDate);
      console.log(startDate);

      $.getJSON("app/controllers/results.json", function(jsonMap2) {
            for(var i=0; i<jsonMap2.length; i++){
              for(var j=0; j<crime_type.length; j++){
                if (crime_type[j].checked == true) {
                  if( new Date(jsonMap2[i][4])>= startDate &&  new Date(jsonMap2[i][4]) <=endDate ){
                    console.table(jsonMap2[i]);
                    if(jsonMap2[i][6] == crime_type[j].value){
                     loadMarkerImg(jsonMap2,i,button,button2,popupOptions); 
                     
                  }
                }
              }
            }
          }
         }); 
    
  }    
     

}

//check all checkbox in selecting crime types
function checkAll(){
    var crime_type= document.getElementsByName('search_by_type');
   // var checkAll=document.getElementById('checkall').checked;
 
    if(document.getElementById("checkAll").checked){
            for ( var x = 0; x < crime_type.length; x++ ){
                crime_type[x].checked = true;
            }
        }
    else{
        for ( var x = 0; x < crime_type.length; x++ ){
             crime_type[x].checked = false;  
            }
        }
}




// function to click a marker in map
function onMapClick(e){
    var coordinates = e.latlng.toString();
    console.log(coordinates)
     longitude = parseFloat(e.latlng.lng).toFixed(5);
     latitude =parseFloat(e.latlng.lat).toFixed(5);
    console.log(longitude);
        marker = L.marker([latitude,longitude]).addTo(map).bindPopup("coordinates is "+ e.latlng.toString()
          +' <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add Marker</button>');
    var startDate = document.getElementById('startDate');
    document.getElementById('lat').value= latitude;
    document.getElementById('lng').value= longitude;
    document.getElementById('date').value= new Date().getMonth()+"/"+new Date().getDay()+"/"+new Date().getFullYear();
    demo.showNotification('top','right','You popped a marker on the map');

   
}





    

               




