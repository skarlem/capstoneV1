

<?php
include_once('header.php');
include_once('map_nav.php');

?>
<body>
	

  
  <div id="map" width:900px;></div>
  

<div class="modal fade bd-example-modal-lg" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         
  </div>
</div>
    </div>
</div>




<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
        <form role="form" method="POST">
        <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="lat" name="lat" placeholder="Latitude" readonly>
              </div>
              
              <div class="form-group input-group">
                <input type="hidden" class="form-control" id="lng" name="lng" placeholder="Longitude" readonly>
              </div>


          <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <h4>General Details</h4>     
            </div>
            <div class="col-md-4">
            <h4>Items Involved </h4>     
            </div>
            <div class="col-md-4">
            <h4>Persons Involved </h4>     
            </div>
          </div>
            <div class="row">
              <div class="col-md-4">

               <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                  <input type="text" class="form-control datetimepicker-input" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date"/>
                </div>

            </div><!-- end col-md-4 -->

            <div class="col-md-4">
                <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Item Name"required oninvalid="" id="item"name="item"/>
                </div>

              
            </div>
          </div><!-- end row -->

          <div class="row">
            <div class="col-md-4">
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
                    <input type="text" class="form-control" name="location"  required oninvalid="" placeholder="Location Description" >
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Item Quantity"required oninvalid="" id="item_quantity"name="item_quantity"/>
                </div>
              
            </div>
                
          </div><!-- end row -->

          <div class="row">
            <div class="col-md-4">
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">person_pin</i></span>
                  <input type="text" class="form-control" id="reported_by"required  oninvalid=""  name="reported_by" placeholder="Reported By(Required)">
                </div>
              </div>

                          
              <div class="col-md-4">
                  <div class="form-group input-group">
                  <i class="material-icons">phonelink </i>
                    <input type="text" class="form-control"  placeholder="Item Description"required oninvalid="" id="item_desc"name="item_desc"/>
                  </div>
                
              </div>
            </div><!-- end row -->


          <div class="row">
            <div class="col-md-4">
              <div class="form-group input-group">
                  
                  <label for="exampleFormControlSelect1">Classification</label>
                  <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="classification" name="classification">
                    <option >Incident Classification</option>
                    <option value='1'>Felony</option>
                    <option value='2'>Misdemeanor</option>
                    <option value='3'>Violation</option>
                    <option value='4'>Incident</option>
                    
                  </select>               
              </div>
            </div>

            <div class="col-md-4">
                <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Item Est. Worth"required oninvalid="" id="item_worth"name="item_worth"/>
                </div>
          </div>

          
              

              </div>
          </div>

          <div class="row">
            <div class="col-md-4">
                          
            
            <div class="col-md-4">
              
              <div class="form-group input-group">
                 
                 <label for="exampleFormControlSelect1">Category</label>
                 <select class="form-control selectpicker"  required oninvalid="" data-style="btn btn-link" id="category" name="category">
                   <option >Category</option>
                   <option value='1's>Theft</option>
                   <option value='2'>Destruction of Property</option>
                   <option value='3'>Vehicular Incident</option>
                   <option value='4'>Animal Bite</option>
                   <option value='5'>Assault</option>
                   <option value='6'>Fire</option>
                 </select>               
             </div>
            </div>
          </div>






          <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary" name="add_marker" >
                <i class="fa "></i> Save to database</button>
            </div>
                       
           </div><!-- end form-body-->

          </form>
        </div><!-- end modal-body-->


    </div>
  </div>
</div>x




      <!-- Modal insert-->
<div class="modal fade bd-example-modal-lg" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="col-lg-12">


            <form role="form" method="POST">

              <input type="hidden" name="edit_id" value="'.$id.'">
              
                <div class="form-group input-group">
                
                  <input type="hidden" class="form-control" id="lat" name="lat" placeholder="Latitude" readonly>
                </div>
                
                <div class="form-group input-group">
                  <input type="hidden" class="form-control" id="lng" name="lng" placeholder="Longitude" readonly>
                </div>
                
 
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                  <input type="text" class="form-control datetimepicker-input" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date"/>
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
                  <input type="text" class="form-control" name="location"  required oninvalid="" placeholder="Location Description" >
                </div>

          
                

                 <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">person_pin</i></span>
                  <input type="text" class="form-control" id="reported_by"required  oninvalid=""  name="reported_by" placeholder="Reported By(Required)">
                </div>
      

              <div class="form-group input-group">
                 
                  <label for="exampleFormControlSelect1">Classification</label>
                  <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="classification" name="classification">
                    <option >Incident Classification</option>
                    <option value='1'>Felony</option>
                    <option value='2'>Misdemeanor</option>
                    <option value='3'>Violation</option>
                    <option value='4'>Incident</option>
                   
                  </select>               
              </div>



              <div class="form-group input-group">
                 
                 <label for="exampleFormControlSelect1">Category</label>
                 <select class="form-control selectpicker"  required oninvalid="" data-style="btn btn-link" id="category" name="category">
                   <option >Category</option>
                   <option value='1'>Theft</option>
                   <option value='2'>Destruction of Property</option>
                   <option value='3'>Vehicular Incident</option>
                   <option value='4'>Animal Bite</option>
                   <option value='5'>Assault</option>
                   <option value='6'>Fire</option>
                 </select>               
             </div>


             <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>


                 <div class="modal-footer">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary" name="add_marker" >
                            <i class="fa "></i> Save to database</button>
                        </div>
                       
                    </div>

                  </form>
                </div>
               
            </div>
      </div>
     
    </div>
  </div>
</div>
    </div>
  </div>







<?php
print_r(getMarkerId());

?>



<!-- map-->
<script type="text/javascript" src="app/js/map.js" onload="initMap()"></script>
<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>


<script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>



<script>
var arr[];

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("input");
  li.id = 'chokoy';
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  arr[]=inputValue;
  li.appendChild(t);  
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

</script>


</body>


<?php
include_once('footer.php');
?>