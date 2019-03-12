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
    iconUrl: './assets/img/new_logo.png',
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
  
function initMap(){
    var location = '';
            map= L.map(document.getElementById("map")).setView([6.06622,125.12530], 16);
                mapLink = 
                        '<a href="http://openstreetmap.org">OpenStreetMap</a>';
                L.tileLayer(
                        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: 'Map data &copy; ' + mapLink,
                        maxZoom: 25,
                        }).addTo(map);
              map.on('click', onMapClick);
              map.keyboard.disable();
              getMarkers2();
              satView();
  
}

function satView(){
  var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});
var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
  maxZoom: 20,
  subdomains:['mt0','mt1','mt2','mt3']
});
var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
  maxZoom: 20,
  subdomains:['mt0','mt1','mt2','mt3']
});

var osm = L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

var baseMaps = {
    "OpenStreetMap": osm,
    "StreetView": googleStreets,
    "SatelliteView": googleSat,
    "Hybrid":googleHybrid
};



L.control.layers(baseMaps, {position: 'bottomleft'}).addTo(map);
}


function clearMarkers(){
   map.eachLayer(function (layer) {
         map.removeLayer(layer);
        });
   map.remove();
    initMap();
   
}

// get images per marker type
function loadMarkerImg(jsonMap2,i,button,button2,popupOptions){
                  if(jsonMap2[i][12]=='Theft'){
                      marker = L.marker([jsonMap2[i][2],jsonMap2[i][3]], {icon: theftIcon}) 
                     
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else{
                      marker = L.marker([jsonMap2[i][2],jsonMap2[i][3]]) 
                      
                      layer = L.layerGroup([marker]).addTo(map); 
                      console.log('addded');
                    }

/*
                    else if(jsonMap2[i][11]=='Robbery'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon})
                      .bindPopup("<strong>Type: Robbery"+"<br>"+
                            "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2,popupOptions); 
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][11]=='Physical Injury'){
                       marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: injuryIcon})
                       .bindPopup("<strong>Type: Physical Injury"+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2,popupOptions); 
                       layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][11]=='Fire Incident'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire})
                      .bindPopup("<strong>Type:Fire"+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2); 
                     layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][11]=='Rape'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon})
                      .bindPopup("<strong>Type: "+jsonMap2[i][3]+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2) ; 
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][11]=='Animal Bite'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: animalBiteIcon})
                      .bindPopup("<strong>Type: "+jsonMap2[i][3]+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2); 
                     layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i][11]=='Vehicular Accident'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon})
                      .bindPopup("<strong>Type: "+jsonMap2[i][3]+"<br>"+
                             "Date: "+jsonMap2[i][4]+"<br>"+
                        "Location: "+jsonMap2[i][5]+"</strong>"+button+button2); 
                    layer = L.layerGroup([marker]).addTo(map); 
                   }
                   */
                 
}


//load the markers
function getMarkers2(){
 
  var endDate = new Date(document.getElementById('dp2').value);
  var startDate = new Date(document.getElementById('dp1').value);
   var crime_type= document.getElementsByName('search_by_type');
   var button = ' <br><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</button>';
   var button2 = ' <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDelete">Remove </button>';
  
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
                   // if(jsonMap2[i][6] == crime_type[j].value){
                     loadMarkerImg(jsonMap2,i,button,button2,popupOptions); 
                     
                  //}
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

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    
    if(dd<10) {
        dd = '0'+dd
    } 
    
    if(mm<10) {
        mm = '0'+mm
    } 
    
    today = mm + '/' + dd + '/' + yyyy;




    document.getElementById('lat').value= latitude;
    document.getElementById('lng').value= longitude;
    document.getElementById('date').value= today;
    console.log(today);
    $('#exampleModal').modal('show');
 //  swal({ title:"Hey!", text: "You put a marker on the map! Click the marker!", type: "success", buttonsStyling: false, confirmButtonClass: "btn btn-success"});
    //demo.showSwal('warning-message-and-confirmation');
   // demo.showNotification();
}





    

               




