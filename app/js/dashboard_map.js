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
    
                        L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
  maxZoom: 20,
  subdomains:['mt0','mt1','mt2','mt3']
                        }).addTo(map);
              map.on('dblclick', onMapClick);
              map.keyboard.disable();
              map.doubleClickZoom.disable();
              map.options.maxZoom = 18;
              map.options.minZoom = 15;
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
                      .bindPopup("this is a theft marker<br>"+
                      "Date: "+jsonMap2[i][4]+"<br>");
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
 
  var endDate = new Date('12/12/2990');
  var startDate = new Date('12/12/1990');
   
   


   var button = ' <br><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</button>';
   var button2 = ' <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDelete">Remove </button>';
  
   var popupOptions ={
    'maxWidth': '2000',
    'className' : 'popupCustom' // classname for another popup
  }
  
   if (startDate > endDate || startDate ==endDate) {
    console.log('bawal');
   }
  else{
     var counter =0;
      console.log(endDate);
      console.log(startDate);

      $.getJSON("app/controllers/results.json", function(jsonMap2) {
            for(var i=0; i<jsonMap2.length; i++){
             
                 
                    if( new Date(jsonMap2[i][3])>= startDate &&  new Date(jsonMap2[i][3]) <=endDate ){
                   
                  
                           
                            loadMarkerImg(jsonMap2,i,button,button2,popupOptions);   

                
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



               




