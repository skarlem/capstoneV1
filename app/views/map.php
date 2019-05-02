

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
              
            <button type="submit" id="add-item-form"form="add-item-form" name="add-item-form" class="btn btn-success ">Add item</button>
              
            </div>
            <div class="col">
            <button type="submit" id="person_involved_form"form="person_involved_form" class="btn btn-success"  data-toggle="tooltip" data-placement="top" >Add person</button>
          
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
               
            
            </div>
            <div class="col">
          
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
                
              </div>

                          
              <div class="col">
                 
                
              </div>

              <div class="col">
                 
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
                 <select class="form-control selectpicker"  required oninvalid="" data-style="btn btn-link" id="category1" name="category1">
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
            
            </div>
            <div class="col" id="olol">
        
  
            </div>
            <div class="col">
            </div>  
          </div>






          <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary float-right btn-add" id="add_marker"name="add_marker" >
                <i class="fa "></i> Save to database</button>
             
                <button type="button" class="btn btn-secondary float-right btn-cancel" aria-label="Close" >
                <i class="fa "></i> Close</button>
            </div>
                       
           </div><!-- end form-body-->

          </form>
        </div><!-- end modal-body-->


    </div>
  </div>
</div>




<!-- add person modal asdasdsa-->

<div class="modal fade" id="add-person-modal" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
        <form role="form" method="POST" id="add-person-form" onsubmit="return false" name="add-person-form">
           <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="add-person-form" name="add-person-form" readonly>
              </div>
            <div class="form-group input-group">
                
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname">
              </div>
              
              <div class="form-group input-group">
                <input type="text" class="form-control" id="affiliation" name="affiliation" placeholder="Affiliation" >
              </div>
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




          <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary float-right btn-add-person" id="add_person"name="add_person" >
                <i class="fa "></i> Save to database</button>
             
                <button type="button" class="btn btn-secondary float-right btn-cancel-person" aria-label="Close" >
                <i class="fa "></i> Close</button>
            </div>
                       
           </div><!-- end form-body-->

          </form>
        </div><!-- end modal-body-->


    </div>
  </div>
</div>





<div class="modal fade" id="add-item-modal" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
        <form role="form" method="POST" id="add-item-form" onsubmit="return false" name="add-item-form">
           <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="add-item-form" name="add-item-form" readonly>
              </div>
            <div class="form-group input-group">
                
                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name">
              </div>
              
              <div class="form-group input-group">
                <input type="text" class="form-control" id="item_desc" name="item_desc" placeholder="Description" >
              </div>
              
              
              <div class="form-group input-group">
                <input type="text" class="form-control" id="item_quantity" name="item_quantity" placeholder="Quantity" >
              </div>

              <div class="form-group input-group">
                <input type="text" class="form-control" id="item_work" name="item_worth" placeholder="Estimated worth" >
              </div>



          <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary float-right btn-add-item" id="add_item"name="add_item" >
                <i class="fa "></i> Save to database</button>
             
                <button type="button" class="btn btn-secondary float-right btn-cancel-item" aria-label="Close" >
                <i class="fa "></i> Close</button>
            </div>
                       
           </div><!-- end form-body-->

          </form>
        </div><!-- end modal-body-->


    </div>
  </div>
</div>






<!-- map-->
<script type="text/javascript" src="app/js/map.js" onload="initMap()"></script>
<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>





<script>

$(function () {
    $('#person_involved_form').on('click',function (e) {
      $('#add-person-modal').modal('show');
   });
});


$(function () {
    $('#add-item-form').on('click',function (e) {
      $('#add-item-modal').modal('show');
             
   });
});


  $(".btn-add").click(function(){
      Swal.fire({
        title: "Are you sure you want to save changes?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          ).then((result) => {
            $("#add-form").submit();
            });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
    });

    $(".btn-add-person").click(function(){
      Swal.fire({
        title: "Are you sure you want to save changes?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          ).then((result) => {
            $("#add-person-form").submit();
            });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
    });

    $(".btn-add-item").click(function(){
      Swal.fire({
        title: "Are you sure you want to save changes?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          ).then((result) => {
            $("#add-item-form").submit();
            });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
    });

    
function add_person(){
  Swal.fire({
        title: "Are you sure you want to add this person?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          );
        
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });

   

}
      
function add_item(){
  Swal.fire({
        title: "Are you sure you want to add this item?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          );
         
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
}

    
  $(".btn-cancel").click(function(){
      Swal.fire({
        title: "Are you sure you want to cancel? Changes will not be saved",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          }).then((result) => {
            $('#exampleModal').modal('hide');
            });;
          
         
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
         
        }
      });


    });


    
  $(".btn-cancel-item").click(function(){
      Swal.fire({
        title: "Are you sure you want to cancel? Changes will not be saved",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          }).then((result) => {
            $('#add-item-modal').modal('hide');
            });;
          
         
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
         
        }
      });
    });

    $(".btn-cancel-person").click(function(){
      Swal.fire({
        title: "Are you sure you want to cancel? Changes will not be saved",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          }).then((result) => {
            $('#add-person-modal').modal('hide');
            });;
          
         
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
         
        }
      });
    });
</script>


<script>
  $('a[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'bottom',
    html: true
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