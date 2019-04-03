var map;
var marker;
var finalMarkers=[];
var markers;
var layer;
var latitude;
var longitude;
var classification=['1','2','3'];
var category=['1','2','3','4','5','6'];


var theftIcon = L.icon({
    iconUrl: './assets/marker/F-Theft.png',iconSize: [50, 50]
});

var theftIcon2 = L.icon({
  iconUrl: './assets/marker/Icecream.png',iconSize: [50, 50]
});
var injuryIcon = L.icon({
    iconUrl: './assets/marker/physical-injury.png',
    
});

var sexualAssaultIcon = L.icon({
    iconUrl: './assets/img/eut.png',

});
var animalBiteIcon = L.icon({
    iconUrl: './assets/marker/asd.png',

});
var fire = L.icon({
    iconUrl: './assets/marker/fire.png',
    
});
var vehicularIncidentIcon = L.icon({
    iconUrl: './assets/marker/F-Vehicular.png',
   
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
              map.on('dblclick', onMapClick);
              map.keyboard.disable();
              map.doubleClickZoom.disable();
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
                  if(jsonMap2[i]['category_id']=='1'){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon}) 
                      .bindPopup("this is a theft marker<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "id:"+jsonMap2[i][0]);
                      layer = L.layerGroup([marker]).addTo(map); 
                  }
                  if(jsonMap2[i]['category_id']=='2'){
                    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon2}) 
                    .bindPopup("this is a destruction of property marker<br>"+
                    "Date: "+jsonMap2[i][3]+"<br>"+
                    "Location:"+jsonMap2[i][4]+"<br>"+
                    "id:"+jsonMap2[i][0]);
                    layer = L.layerGroup([marker]).addTo(map); 
                  }
                  if(jsonMap2[i]['category_id']=='3'){
                    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon}) 
                    .bindPopup("this is a vehicular incident<br>"+
                    "Date: "+jsonMap2[i][3]+"<br>"+
                    "Location:"+jsonMap2[i][4]+"<br>"+
                    "id:"+jsonMap2[i][0]);
                    layer = L.layerGroup([marker]).addTo(map); 
                  }
                  if(jsonMap2[i]['category_id']=='4'){
                    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: animalBiteIcon}) 
                    .bindPopup("this is a animal marker<br>"+
                    "Date: "+jsonMap2[i][3]+"<br>"+
                    "Location:"+jsonMap2[i][4]+"<br>"+
                    "id:"+jsonMap2[i][0]);
                    layer = L.layerGroup([marker]).addTo(map); 
                  }
                  /*
                  else{
                    marker = L.marker([jsonMap2[i][2],jsonMap2[i][3]]) 
                    .bindPopup("this is a theft marker<br>");
                    layer = L.layerGroup([marker]).addTo(map); 
                    console.log('addded');
                  }


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
 
  var endDate = new Date('12/12/1990');
  var startDate = new Date('12/12/2990');
   
   


   var button = ' <br><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</button>';
   var button2 = ' <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDelete">Remove </button>';
  
   var popupOptions ={
    'maxWidth': '2000',
    'className' : 'popupCustom' // classname for another popup
  }
  
   if (startDate > endDate) {
    alert('bawal');
   }
  else{
     var counter =0;
      console.log(endDate);
      console.log(startDate);


      
     }
      $.getJSON("app/controllers/results.json", function(jsonMap2) {
            for(var i=0; i<jsonMap2.length; i++){
              for(var j=0; j<crime_type.length; j++){
                for(var k=0; k<classification_arr.length; k++){
                 
                  if (crime_type[j].checked == true && classification_arr[k].checked) {
                   
                    if( new Date(jsonMap2[i][3])>= startDate &&  new Date(jsonMap2[i][3]) <=endDate ){
                   
                  
                            console.log(jsonMap2[i][8]);
                            console.log(classification_arr[k].value);
                            loadMarkerImg(jsonMap2,i,button,button2,popupOptions); 
                    
                    }
                  }
                       

                }
              }
            }
      
         }); 
    
  }     



//check all checkbox in selecting crime types
function checkAll(){
    var crime_type= document.getElementsByName('classification');
   
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

function checkAllCategory(){
 
  var category= document.getElementsByName('category');

      if(document.getElementById("checkAllCategory").checked){
        for ( var x = 0; x < category.length; x++ ){
           category[x].checked = true;
        }
        }
    else{
        for ( var x = 0; x < category.length; x++ ){
             category[x].checked = false;  
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





    

               




