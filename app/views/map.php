

<?php
include_once('header.php');
include_once('map_nav.php');

?>
<body>
	

  <div id="map" width:900px;></div>
  

<div class="modal fade bd-example-modal-lg " id="insertModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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




<div class="modal fade bd-example-modal-lg" id="exampleModal" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg w-75 p-3">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
        <form role="form" method="POST" id="add-form" name="add-form">
        <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="add-form" name="add-form" readonly>
              </div>
        <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="lat" name="lat" placeholder="Latitude" readonly>
              </div>
              
              <div class="form-group input-group">
                <input type="hidden" class="form-control" id="lng" name="lng" placeholder="Longitude" readonly>
              </div>


          <div class="container-fluid">
          <div class="row">
            <div class="col">
            <h4>General Details</h4>     
            </div>
            <div class="col">
            <h4>Items Involved </h4>     
            </div>
            <div class="col">
            <h4>Persons Involved </h4>     
            </div>
            <div class="col">
            <h4>Incident Narrative </h4>     
            </div>
            
          </div>
            <div class="row">
              <div class="col">

               <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                  <input type="text" class="form-control datetimepicker-input" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date"/>
                </div>

            </div><!-- end col-md-4 -->

            <div class="col">
                <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Item Name"required oninvalid="" id="item"name="item"/>
                </div>

              
            </div>
            <div class="col">
            <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Fullname"required oninvalid="" id="person_involved_name"name="person_involved_name"/>
                </div>
            </div>
            <div class="col">
            
            <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="What Happened"required oninvalid="" id="narrative"name="narrative"/>
                </div>
            </div>
          </div><!-- end row -->

          <div class="row">
            <div class="col">
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
                    <input type="text" class="form-control" name="location"  required oninvalid="" placeholder="Location Description" >
                </div>
              </div>

              <div class="col">
                <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Item Quantity"required oninvalid="" id="item_quantity"name="item_quantity"/>
                </div>
              
            </div>
            <div class="col">
            <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Affiliation"required oninvalid="" id="affiliation"name="affiliation"/>
                </div>
            </div>
            <div class="col">
            <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Action Taken"required oninvalid="" id="action_taken"name="action_taken"/>
                </div>
            </div>
                
          </div><!-- end row -->

          <div class="row">
            <div class="col">
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">person_pin</i></span>
                  <input type="text" class="form-control" id="reported_by"required  oninvalid=""  name="reported_by" placeholder="Reported By(Required)">
                </div>
              </div>

                          
              <div class="col">
                  <div class="form-group input-group">
                  <i class="material-icons">phonelink </i>
                    <input type="text" class="form-control"  placeholder="Item Description"required oninvalid="" id="item_desc"name="item_desc"/>
                  </div>
                
              </div>

              <div class="col">
                  <div class="form-group input-group">
                      
                      <label for="exampleFormControlSelect1">Involvement</label>
                      <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="involvement" name="involvement">
                        <option >Involvement</option>
                        <option value='1'>Victim</option>
                        <option value='2'>Suspect</option>
                        <option value='3'>Witness</option>
                        <option value='4'>Investigator</option>
                        <option value='5'>Roving Guards</option>
                        
                      </select>               
                  </div>
            </div>

            <div class="col">
              <div class="form-group input-group">
                    
                    <label for="exampleFormControlSelect1">Incident Status</label>
                    <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="incident_status" name="incident_status">
                      <option >Incident Status</option>
                      <option value='1'>Resolved</option>
                      <option value='2'>Unresolved</option>
                      <option value='3'>Under Investigation</option>
                      <option value='4'>Forwarded to OSA</option>
                      <option value='5'>Forwarded to PNP</option>
                      <option value='6'>Resolved in OSA</option>
                      <option value='7'>Settled</option>
                      <option value='8'>Settled in OSA</option>
                      <option value='9'>Investigated</option>
                      
                    </select>               
                </div>
                </div>
            </div><!-- end row -->


          <div class="row">
            <div class="col">
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

            <div class="col">
                <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Item Est. Worth"required oninvalid="" id="item_worth"name="item_worth"/>
                </div>
          </div>
          <div class="col">
            </div>
            <div class="col">
            </div>
              

              </div>
          </div>

          <div class="row">
            
                          
            
            <div class="col">
              
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
            <div class="col">
            <button type="submit"id="asd" class="btn btn-primary float-right"  >click me</button>
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>  
          </div>






          <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary float-right swa-confirm" id="add_marker"name="add_marker" >
                <i class="fa "></i> Save to database</button>
             
                <button type="button" class="btn btn-secondary float-right" data-dismiss="modal" aria-label="Close" >
                <i class="fa "></i> Close</button>
            </div>
                       
           </div><!-- end form-body-->

          </form>
        </div><!-- end modal-body-->


    </div>
  </div>
</div>




<div class="modal fade" id="change_password" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body change_password">
                Modal body
            </div>
        </div>
    </div>
</div>






<!-- map-->
<script type="text/javascript" src="app/js/map.js" onload="initMap()"></script>
<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>

<script>
function notif(){
  swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: 'Yes, delete it!',
        buttonsStyling: false
      }).then(function() {
        $('#change_password').modal('show')
       
      }).catch(swal.noop)
}
$(".swa-confirm").on("click", function(e) {
    e.preventDefault();
    var form = $(this).parents('form');
    swal({
        title: "Are you sure?",
        text: "You cannot undo your changes",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          console.log('submit oy pota');
          swal("Your changes have been saved!", {
            icon: "success",
          }).then(function(){
            
            document.forms["add-form"].submit();
          });
         
        } 
        else {
          swal("Your changes was not saved!");
        }
      });
});
  

</script>


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