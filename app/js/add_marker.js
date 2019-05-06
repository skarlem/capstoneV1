
  
function initMap(){ 
            map= L.map(document.getElementById("map")).setView([6.06622,125.12530], 16);
                mapLink ='<a href="http://openstreetmap.org">OpenStreetMap</a>';
                L.tileLayer(
                        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: 'Map data &copy; ' + mapLink,
                        maxZoom: 25,
                        }).addTo(map);
                        map.keyboard.disable();
                        map.doubleClickZoom.disable();
                        map.options.maxZoom = 18;
                        map.options.minZoom = 15;
                        satView();
            setMarker();
}

  
var customOptions ={
        'maxWidth': '500',
        'className' : 'custom'
        }



function setMarker(){
    var lat=document.getElementById('lat').value;
    var lng=document.getElementById('lng').value;
    marker = L.marker([lat,lng]).addTo(map).bindPopup("coordinates is "+lat+lng
    +'<br>This is your Marker');
console.log('adadas');
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



// function to click a marker in map
function onMapClick(e){
    clearMarkers();
    var coordinates = e.latlng.toString();
    console.log(coordinates)
     longitude = parseFloat(e.latlng.lng).toFixed(5);
     latitude =parseFloat(e.latlng.lat).toFixed(5);
    console.log(longitude);
        marker = L.marker([latitude,longitude]).addTo(map).bindPopup("coordinates is "+ e.latlng.toString()
          +'<br>This is your Marker');
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
    
    //today = mm + '/' + dd + '/' + yyyy;


    document.getElementById('lat').value= latitude;
    document.getElementById('lng').value= longitude;

    var today1 = new Date().toLocaleDateString(undefined, {
      day: '2-digit',
      month: 'long',
      year: 'numeric',
      hour: '2-digit',
      minute: '2-digit',
  });
    document.getElementById('date').value= today1;
   
    console.log(today);
    $('#exampleModal').modal('show');
 //  swal({ title:"Hey!", text: "You put a marker on the map! Click the marker!", type: "success", buttonsStyling: false, confirmButtonClass: "btn btn-success"});
    //demo.showSwal('warning-message-and-confirmation');
   // demo.showNotification();
}





    

               




