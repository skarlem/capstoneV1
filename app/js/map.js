var map;
var marker;
var finalMarkers=[];
var markers;
var layer;
var latitude;
var longitude;
var classification=['1','2','3'];
var category=['1','2','3','4','5','6'];


var act_of_lasciviousness = L.icon({
    iconUrl: './assets/img/newMarkers/Act_of_Lasciviousness.png',iconSize: [50, 50]
});

var animal_bite = L.icon({
  iconUrl: './assets/img/newMarkers/Animal_Bite.png',iconSize: [50, 50]
});

var assault = L.icon({
  iconUrl: './assets/img/newMarkers/Assault.png',iconSize: [50, 50]
});

var breaking_and_entering = L.icon({
  iconUrl: './assets/img/newMarkers/Breaking_and_Entering.png',iconSize: [50, 50]
});

var death = L.icon({
  iconUrl: './assets/img/newMarkers/Death.png',iconSize: [50, 50]
});

var disorder = L.icon({
  iconUrl: './assets/img/newMarkers/Disorder.png',iconSize: [50, 50]
});

var drugs = L.icon({
  iconUrl: './assets/img/newMarkers/Drugs.png',iconSize: [50, 50]
});

var emergency = L.icon({
  iconUrl: './assets/img/newMarkers/Emergency.png',iconSize: [50, 50]
});

var fire = L.icon({
  iconUrl: './assets/img/newMarkers/Fire.png',iconSize: [50, 50]
});

var rape = L.icon({
  iconUrl: './assets/img/newMarkers/Rape.png',iconSize: [50, 50]
});

var robbery = L.icon({
  iconUrl: './assets/img/newMarkers/Robbery.png',iconSize: [50, 50]
});

var theft = L.icon({
  iconUrl: './assets/img/newMarkers/Theft.png',iconSize: [50, 50]
});

var vehicular_accident = L.icon({
  iconUrl: './assets/img/newMarkers/Vehicular.png',iconSize: [50, 50]
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
             
              map.keyboard.disable();
              map.doubleClickZoom.disable();
              map.options.maxZoom = 18;
              map.options.minZoom = 15;
              getMarkers2();
              satView();
  
}



function clearMarkers2(){
  map.eachLayer(function (layer) {
        map.removeLayer(layer);
       });
  map.remove();
   initMap2();
  
}

function initMap2(){
  var location = '';
          map= L.map(document.getElementById("map")).setView([6.06622,125.12530], 16);
              mapLink = 
                      '<a href="http://openstreetmap.org">OpenStreetMap</a>';
              L.tileLayer(
                      'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                      attribution: 'Map data &copy; ' + mapLink,
                      maxZoom: 25,
                      }).addTo(map);
            
            map.keyboard.disable();
            map.doubleClickZoom.disable();
            map.options.maxZoom = 18;
            map.options.minZoom = 15;
            getMarkers3();
            satView();

}
var customOptions ={
        'maxWidth': '500',
        'className' : 'custom'
        }
var customOptions ={
        'maxWidth': '500',
        'className' : 'custom'
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
  if(jsonMap2[i]['classification_id']=='1'){
    console.log('classification is 1  ');
      if(jsonMap2[i]['category']==1){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: disorder}) 
        .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
        layer = L.layerGroup([marker]).addTo(map); 

      }
      else if(jsonMap2[i]['category']==2){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: drugs}) 
        .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
        layer = L.layerGroup([marker]).addTo(map); 

      }
      else if(jsonMap2[i]['category']==3){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: death}) 
        .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
        layer = L.layerGroup([marker]).addTo(map); 

      }
      else if(jsonMap2[i]['category']==4){
        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: assault}) 
        .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
        "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
        "Incident Category:"+jsonMap2[i][13]+"<br>"+
        "Date: "+jsonMap2[i][3]+"<br>"+
        "Location:"+jsonMap2[i][4]+"<br>"+
        "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
        layer = L.layerGroup([marker]).addTo(map); 

      }
 
  }
   if(jsonMap2[i]['classification_id']==2){
    console.log('classification is 2');
    if(jsonMap2[i]['category']==5){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:rape }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['category']==6){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:act_of_lasciviousness }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
  }
   if(jsonMap2[i]['classification_id']==3){
    console.log('classification is 3');
    if(jsonMap2[i]['category']==7){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:robbery }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['category']==8){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:theft }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
   else if(jsonMap2[i]['category']==9){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:breaking_and_entering }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
    

  }
   if(jsonMap2[i]['classification_id']==4){
    console.log('classification is 4');
    if(jsonMap2[i]['category']==10){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:emergency }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['category']==11){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:fire }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['category']==12){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:vehicular_accident }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
    else if(jsonMap2[i]['category']==13){
      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon:animal_bite }) 
      .bindPopup("<span class='badge badge-success'>Crime against Person</span><br>"+
      "<font color='black'>Incident ID:"+jsonMap2[i][0]+"<br>"+
      "Incident Category:"+jsonMap2[i][13]+"<br>"+
      "Date: "+jsonMap2[i][3]+"<br>"+
      "Location:"+jsonMap2[i][4]+"<br>"+
      "Incident Status:</font><span class='badge badge-danger'>"+jsonMap2[i][14]+"</span>",popupOptions);
      layer = L.layerGroup([marker]).addTo(map); 

    }
  }
}




//load the markers
function getMarkers3(){
  console.log(document.getElementById('dp2').value);
   var endDate = new Date(document.getElementById('dp2').value);
   var startDate = new Date(document.getElementById('dp1').value);
    var crime_type = document.getElementsByName('category'); 
    var classification_arr=document.getElementById('classification_nav').value;
    
    
 
 
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
               
                     if( new Date(jsonMap2[i][3])>= startDate &&  new Date(jsonMap2[i][3]) <=endDate ){
                      
                      loadMarkerImg(jsonMap2,i,button,button2,popupOptions); 
               }
             }
       
          }); 
     
   }    
//load the markers
function getMarkers2(){
 console.log(document.getElementById('dp2').value);
  var endDate = new Date(document.getElementById('dp2').value);
  var startDate = new Date(document.getElementById('dp1').value);
   var crime_type = document.getElementsByName('category'); 
   var classification_arr=document.getElementById('classification_nav').value;
   
   


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
               
                  
                 
                 if (crime_type[j].checked == true) {
                 
                    if( new Date(jsonMap2[i][3])>= startDate &&  new Date(jsonMap2[i][3]) <=endDate ){
                     
                        if(jsonMap2[i]['category_desc']==crime_type[j].value){
                          console.log(jsonMap2[i]['classification_id']+"jsonmap classi");
                          console.log(classification_arr+"classi_arr");
                          
                         
                          if(jsonMap2[i]['classification_id']==classification_arr){
                            loadMarkerImg(jsonMap2,i,button,button2,popupOptions); 
                            console.log(crime_type[j].value);
                            console.log(classification_arr);
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





    

               




