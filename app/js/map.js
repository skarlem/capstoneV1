var map;
var marker;
var finalMarkers=[];
var markers;
var layer;
var latitude;
var longitude;
var classification=['1','2','3'];
var category=['1','2','3','4','5','6'];


var theftIcon1 = L.icon({
    iconUrl: './assets/marker/F-Theft.png',iconSize: [50, 50]
});

var theftIcon2 = L.icon({
  iconUrl: './assets/marker/M-Theft.png',iconSize: [50, 50]
});

var theftIcon3 = L.icon({
  iconUrl: './assets/marker/V-Theft.png',iconSize: [50, 50]
});

var theftIcon4 = L.icon({
  iconUrl: './assets/marker/I-Theft.png',iconSize: [50, 50]
});

var destruction1 = L.icon({
    iconUrl: './assets/marker/F-Destruction.png',iconSize: [50, 50]
    
});

var destruction2 = L.icon({
  iconUrl: './assets/marker/M-Destruction.png',iconSize: [50, 50]
  
});


var destruction3 = L.icon({
  iconUrl: './assets/marker/V-Destruction.png',iconSize: [50, 50]
  
});


var destruction4 = L.icon({
  iconUrl: './assets/marker/I-Destruction.png',iconSize: [50, 50]
  
});


var vehicularIncidentIcon1 = L.icon({
    iconUrl: './assets/marker/F-Vehicular.png',iconSize: [50, 50]
   
  });


  var vehicularIncidentIcon2 = L.icon({
    iconUrl: './assets/marker/M-Vehicular.png',iconSize: [50, 50]
   
  });
  
var vehicularIncidentIcon3 = L.icon({
  iconUrl: './assets/marker/V-Vehicular.png',iconSize: [50, 50]
 
});

var vehicularIncidentIcon4 = L.icon({
  iconUrl: './assets/marker/I-Vehicular.png',iconSize: [50, 50]
 
});
var sexualAssaultIcon1 = L.icon({
    iconUrl: './assets/img/F-Harassment.png',iconSize: [50, 50]

});

var sexualAssaultIcon2 = L.icon({
  iconUrl: './assets/img/M-Harassment.png',iconSize: [50, 50]

});

var sexualAssaultIcon3 = L.icon({
  iconUrl: './assets/img/V-Harassment.png',iconSize: [50, 50]

});

var sexualAssaultIcon4 = L.icon({
  iconUrl: './assets/img/I-Harassment.png',iconSize: [50, 50]

});
var animalBiteIcon1 = L.icon({
    iconUrl: './assets/marker/I-Animal Bite.png',iconSize: [50, 50]

});


var fire1 = L.icon({
    iconUrl: './assets/marker/F-Fire.png',iconSize: [50, 50]
    
});

var fire2 = L.icon({
  iconUrl: './assets/marker/M-Fire.png',iconSize: [50, 50]
  
});

var fire3 = L.icon({
  iconUrl: './assets/marker/V-Fire.png',iconSize: [50, 50]
  
});

var fire4 = L.icon({
  iconUrl: './assets/marker/I-Fire.png',iconSize: [50, 50]
  
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
  if(jsonMap2[i]['category']=='1'){
      if(jsonMap2[i]['classification']==1){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon1}) 
        .bindPopup("<span class='badge badge-success'>Misdemeanor</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
        layer = L.layerGroup([marker]).addTo(map); 

      }
      else if(jsonMap2[i]['classification']==2){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon2}) 
        .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
        layer = L.layerGroup([marker]).addTo(map); 
      }
      else if(jsonMap2[i]['classification']==3){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon3}) 
        .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
        layer = L.layerGroup([marker]).addTo(map); 
      }
      else if(jsonMap2[i]['classification']==4){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon4}) 
        .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
        layer = L.layerGroup([marker]).addTo(map); 
      }
     
  }


  if(jsonMap2[i]['category']=='2'){
    if(jsonMap2[i]['classification']==1){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction1}) 
      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['classification']==2){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction2}) 
      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    }
    else if(jsonMap2[i]['classification']==3){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction3}) 
      .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br></font>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    }
    else if(jsonMap2[i]['classification']==4){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction4}) 
      .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    } 
  }



  if(jsonMap2[i]['category']=='3'){
    if(jsonMap2[i]['classification']==1){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon1}) 
      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['classification']==2){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon2}) 
      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    }
    else if(jsonMap2[i]['classification']==3){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon3}) 
      .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    }
    else if(jsonMap2[i]['classification']==4){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon4}) 
      .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    } 
  }

  
  if(jsonMap2[i]['category']=='4'){
   
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: animalBiteIcon1}) 
      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 

  }


  if(jsonMap2[i]['category']=='5'){
   
    if(jsonMap2[i]['classification']==1){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon1}) 
      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['classification']==2){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon2}) 
      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    }
    else if(jsonMap2[i]['classification']==3){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon3}) 
      .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    }
    else if(jsonMap2[i]['classification']==4){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon4}) 
      .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
      layer = L.layerGroup([marker]).addTo(map); 
    } 
}
if(jsonMap2[i]['category']=='6'){
  if(jsonMap2[i]['classification']==1){
    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire1}) 
    .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
    "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
    "Incident Category:"+jsonMap2[i][13]+"<br>"+
    "Date: "+jsonMap2[i][3]+"<br>"+
    "Location:"+jsonMap2[i][4]+"<br>"+
    "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
    layer = L.layerGroup([marker]).addTo(map); 

  }
  else if(jsonMap2[i]['classification']==2){
    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire2}) 
    .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
    "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
    "Incident Category:"+jsonMap2[i][13]+"<br>"+
    "Date: "+jsonMap2[i][3]+"<br>"+
    "Location:"+jsonMap2[i][4]+"<br>"+
    "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
    layer = L.layerGroup([marker]).addTo(map); 
  }
  else if(jsonMap2[i]['classification']==3){
    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire3}) 
    .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
    "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
    "Incident Category:"+jsonMap2[i][13]+"<br>"+
    "Date: "+jsonMap2[i][3]+"<br>"+
    "Location:"+jsonMap2[i][4]+"<br>"+
    "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
    layer = L.layerGroup([marker]).addTo(map); 
  }
  else if(jsonMap2[i]['classification']==4){
    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire4}) 
    .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
    "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
    "Incident Category:"+jsonMap2[i][13]+"<br>"+
    "Date: "+jsonMap2[i][3]+"<br>"+
    "Location:"+jsonMap2[i][4]+"<br>"+
    "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
    layer = L.layerGroup([marker]).addTo(map); 
  } 
}
 
}

//load the markers
function getMarkers2(){
 console.log(document.getElementById('dp2').value);
  var endDate = new Date(document.getElementById('dp2').value);
  var startDate = new Date(document.getElementById('dp1').value);
   var crime_type = document.getElementsByName('category'); 
   var classification_arr=document.getElementsByName('classification');
   
   


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
                   
                    
                        if(jsonMap2[i]['category']==crime_type[j].value){
                          
                          if(jsonMap2[i]['classification']==classification_arr[k].value){
                           
                            loadMarkerImg(jsonMap2,i,button,button2,popupOptions); 
                          }
                          
                        }
                      
                        
                      
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





    

               




