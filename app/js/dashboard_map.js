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
                        .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                        "Incident ID:"+jsonMap2[i][0]+"<br>"+
                        "Incident Category:"+jsonMap2[i][13]+"<br>"+
                        "Date: "+jsonMap2[i][3]+"<br>"+
                        "Location:"+jsonMap2[i][4]+"<br>"+
                        "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                        layer = L.layerGroup([marker]).addTo(map); 

                      }
                      else if(jsonMap2[i]['classification']==2){
                        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon2}) 
                        .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                        "Incident ID:"+jsonMap2[i][0]+"<br>"+
                        "Incident Category:"+jsonMap2[i][13]+"<br>"+
                        "Date: "+jsonMap2[i][3]+"<br>"+
                        "Location:"+jsonMap2[i][4]+"<br>"+
                        "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                        layer = L.layerGroup([marker]).addTo(map); 
                      }
                      else if(jsonMap2[i]['classification']==3){
                        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon3}) 
                        .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
                        "Incident ID:"+jsonMap2[i][0]+"<br>"+
                        "Incident Category:"+jsonMap2[i][13]+"<br>"+
                        "Date: "+jsonMap2[i][3]+"<br>"+
                        "Location:"+jsonMap2[i][4]+"<br>"+
                        "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                        layer = L.layerGroup([marker]).addTo(map); 
                      }
                      else if(jsonMap2[i]['classification']==4){
                        marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: theftIcon4}) 
                        .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
                        "Incident ID:"+jsonMap2[i][0]+"<br>"+
                        "Incident Category:"+jsonMap2[i][13]+"<br>"+
                        "Date: "+jsonMap2[i][3]+"<br>"+
                        "Location:"+jsonMap2[i][4]+"<br>"+
                        "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                        layer = L.layerGroup([marker]).addTo(map); 
                      }
                     
                  }


                  if(jsonMap2[i]['category']=='2'){
                    if(jsonMap2[i]['classification']==1){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction1}) 
                      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 

                    }
                    else if(jsonMap2[i]['classification']==2){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction2}) 
                      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i]['classification']==3){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction3}) 
                      .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i]['classification']==4){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: destruction4}) 
                      .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    } 
                  }



                  if(jsonMap2[i]['category']=='3'){
                    if(jsonMap2[i]['classification']==1){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon1}) 
                      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 

                    }
                    else if(jsonMap2[i]['classification']==2){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon2}) 
                      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i]['classification']==3){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon3}) 
                      .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i]['classification']==4){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: vehicularIncidentIcon4}) 
                      .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    } 
                  }

                  
                  if(jsonMap2[i]['category']=='4'){
                   
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: animalBiteIcon1}) 
                      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 

                  }


                  if(jsonMap2[i]['category']=='5'){
                   
                    if(jsonMap2[i]['classification']==1){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon1}) 
                      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 

                    }
                    else if(jsonMap2[i]['classification']==2){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon2}) 
                      .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i]['classification']==3){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon3}) 
                      .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    }
                    else if(jsonMap2[i]['classification']==4){
                      marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: sexualAssaultIcon4}) 
                      .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
                      "Incident ID:"+jsonMap2[i][0]+"<br>"+
                      "Incident Category:"+jsonMap2[i][13]+"<br>"+
                      "Date: "+jsonMap2[i][3]+"<br>"+
                      "Location:"+jsonMap2[i][4]+"<br>"+
                      "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                      layer = L.layerGroup([marker]).addTo(map); 
                    } 
                }
                if(jsonMap2[i]['classification']=='6'){
                  if(jsonMap2[i]['classification']==1){
                    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire1}) 
                    .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                    "Incident ID:"+jsonMap2[i][0]+"<br>"+
                    "Incident Category:"+jsonMap2[i][13]+"<br>"+
                    "Date: "+jsonMap2[i][3]+"<br>"+
                    "Location:"+jsonMap2[i][4]+"<br>"+
                    "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                    layer = L.layerGroup([marker]).addTo(map); 

                  }
                  else if(jsonMap2[i]['classification']==2){
                    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire2}) 
                    .bindPopup("<span class='badge badge-danger'>Misdemeanor</span><br>"+
                    "Incident ID:"+jsonMap2[i][0]+"<br>"+
                    "Incident Category:"+jsonMap2[i][13]+"<br>"+
                    "Date: "+jsonMap2[i][3]+"<br>"+
                    "Location:"+jsonMap2[i][4]+"<br>"+
                    "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                    layer = L.layerGroup([marker]).addTo(map); 
                  }
                  else if(jsonMap2[i]['classification']==3){
                    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire3}) 
                    .bindPopup("<span class='badge badge-success'>Violation</span><br>"+
                    "Incident ID:"+jsonMap2[i][0]+"<br>"+
                    "Incident Category:"+jsonMap2[i][13]+"<br>"+
                    "Date: "+jsonMap2[i][3]+"<br>"+
                    "Location:"+jsonMap2[i][4]+"<br>"+
                    "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                    layer = L.layerGroup([marker]).addTo(map); 
                  }
                  else if(jsonMap2[i]['classification']==4){
                    marker = L.marker([jsonMap2[i][1],jsonMap2[i][2]], {icon: fire4}) 
                    .bindPopup("<span class='badge badge-success'>Incident</span><br>"+
                    "Incident ID:"+jsonMap2[i][0]+"<br>"+
                    "Incident Category:"+jsonMap2[i][13]+"<br>"+
                    "Date: "+jsonMap2[i][3]+"<br>"+
                    "Location:"+jsonMap2[i][4]+"<br>"+
                    "Incident Status:<span class='badge badge-danger'>"+jsonMap2[i][13]+"</span>");
                    layer = L.layerGroup([marker]).addTo(map); 
                  } 
                }
                 
}


//load the markers
function getMarkers2(){
 
  var endDate = new Date('12/12/2990');
  var startDate = new Date('12/12/1990');
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
              console.log('qweqwe');
                    if( new Date(jsonMap2[i][3])>= startDate &&  new Date(jsonMap2[i][3]) <=endDate ){
                   
                    console.log('okay ang date')
                       
                          console.log('chokoy');
                        
                            console.log(jsonMap2[i][8]);
                           
                            loadMarkerImg(jsonMap2,i,button,button2,popupOptions); 
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



