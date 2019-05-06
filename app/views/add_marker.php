

<?php
include_once('header.php');
include_once('add_marker_nav.php');

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
    
<?php
if(isset($_POST['save_emergency'])){

  $id=$_POST['marker_id'];
  $date=$_POST['date'];
  $report=$_POST['report_details'];
  $reporter_id=$_POST['reported_by'];
  $lat=$_POST['lat'];
  $lng=$_POST['lng'];
  echo'
  <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Map</h4>
                  </div>
                </div>
                <div class="card-body ">
                  
                  <div id="map" style="height:500px; width:100%;" ></div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Incident Details</h4>
                    <span class="badge badge-primary">Marker ID: '.$id.'</span>

                  </div>
                </div>
                <div class="card-body ">

        <form role="form" method="POST" id="add-form" name="add-form" >
        <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="add-form" name="add-form" readonly>
              </div>
        <div class="form-group input-group">
                
                <input type="text" class="form-control" id="lat" name="lat" value="'.$lat.'"placeholder="Latitude" readonly>
              </div>
              
              <div class="form-group input-group">
                <input type="text" class="form-control" id="lng" name="lng" value="'.$lng.'"placeholder="Longitude" readonly>
              </div>
             
              


          <div class="container-fluid">
          <div class="row">
            <div class="col">
            <h4>General Details</h4>     
            </div>
            <div class="col">
            <h4>Incident Narrative </h4>
                
            </div>
            <div class="col">
            <h4>Persons Involved </h4>     
            </div>
            <div class="col">
            <h4>Items Involved </h4>
            </div>
            
          </div>
          
            <div class="row">
            
           
                   
                 
                   
                   
           
              <div class="col">
                
               <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                  <input type="text" class="form-control" required oninvalid="" value="'.$date.'" name="date"readonly/>
                </div>

            </div><!-- end col-md-4 -->

            <div class="col">
              <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="What Happened"required oninvalid="" id="narrative"name="narrative"/>
                </div>
             
            </div>
            <div class="col">
            <button type="submit" id="person_involved_form"form="person_involved_form" class="btn btn-success"  data-toggle="tooltip" data-placement="top" >Add person</button>
          
            </div>
            <div class="col">
            <button type="submit" id="add-item-form" form="add-item-form" name="add-item-form" class="btn btn-success ">Add item</button>
             
            
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
                  <input type="text" class="form-control"  placeholder="Action Taken"required oninvalid="" id="action_taken"name="action_taken"/>
                </div>
            
            </div>
            <div class="col">
              <div id="persons  ">

              </div>
            </div>
            <div class="col">
            
            </div>
                
          </div><!-- end row -->

          <div class="row">
            <div class="col">
            <div class="form-group input-group">
                <i class="material-icons">phonelink </i>
                  <input type="text" class="form-control"  placeholder="Reported by (ID NUMBER)"required oninvalid="" value="'.$reporter_id.'"id="reported_by"name="reported_by"/>
                </div>
              </div>

                          
              <div class="col">
              <div class="form-group input-group">
                    
                    <label for="exampleFormControlSelect1">Incident Status</label>
                    <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="incident_status" name="incident_status">
                      <option >Incident Status</option>
                      <option value="1">Resolved</option>
                      <option value="2">Unresolved</option>
                      <option value="3">Under Investigation</option>
                      <option value="4">Forwarded to OSA</option>
                      <option value="5">Forwarded to PNP</option>
                      <option value="6">Resolved in OSA</option>
                      <option value="7">Settled</option>
                      <option value="8">Settled in OSA</option>
                      <option value="9">Investigated</option>
                      
                    </select>               
                </div>
                
              </div>

              <div class="col"> 
            
            </div>

            <div class="col">
             
                </div>
            </div><!-- end row -->


          <div class="row">
          <div class="col-md-3">
          <div class="form-group input-group">
                    <select class="form-control selectpicker" data-style="btn btn-link" id="class" name="class">
                      <option >Class</option>
                      <option value="1">Emergency</option>
                      <option value="2">Non-Emergency</option>
                     
                    </select>         

        </div><br>
        <div class="form-group input-group">
                <select class="form-control selectpicker " data-style="btn btn-link" id="category" name="category">
                      <option >Category</option>
                      <option value="1">Disorder</option>
                      <option value="2">Drugs</option>
                      <option value="3">Death</option>
                      <option value="4">Assault</option>
                     
                      <option value="5">Rape</option>
                      <option value="6">Lasciviousness</option>
                      <option value="7">Robbery</option>
                      <option value="8">Theft</option>
                      <option value="9">Breaking and Entering</option>
                      <option value="10">Emergency (Disasters)</option>
                      <option value="11">Fire</option>
                      <option value="12">Vehicular Accidents</option>
                      <option value="13">Animal Bite</option>
                    </select>         
                </div>
          
          </div>
          
               
</div>

<br>



          
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
              
            
            
            </div>

            <div class="col">
            
            </div>
            <div class="col" id="olol">
        
  
            </div>
            <div class="col">
            </div>  
          </div>






          <div class="modal-footer">
            <div class="col-lg-12"> 
              <button type="button" class="btn btn-secondary float-left btn-cancel" aria-label="Close" >
                <i class="fa "></i> Cancel</button>
                <button type="button" class="btn btn-primary float-left btn-add" id="add_marker"name="add_marker" >
                <i class="fa "></i> Save to database</button>
             
               
            </div>
                       
           </div><!-- end form-body-->

          </form>
              </div>
          </div>
        </div>
      </div>

         </div>

                </div>
              </div>
            </div>

            
  
<script type="text/javascript" src="app/js/add_marker.js" onload="initMap()"charset="UTF-8"></script>

 
  
  ';
}



else{
  $marker = (int)getMarkerId()[0][0]+1;
    echo'
    <div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-text">
        <div class="card-text">
          <h4 class="card-title">Map</h4>
        </div>
      </div>
      <div class="card-body ">
        
        <div id="map" style="height:500px; width:100%;" ></div> 
      </div>
    </div>
  </div>
</div>
</div>
</div>


<div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-text">
        <div class="card-text">
          <h4 class="card-title">Incident Details</h4>
          <span class="badge badge-primary">Marker ID:'.$marker.'</span>

        </div>
      </div>
      <div class="card-body ">

<form role="form" method="POST" id="add-form" name="add-form" >
<div class="form-group input-group">
      
      <input type="hidden" class="form-control" id="add-form" name="add-form" readonly>
    </div>
<div class="form-group input-group">
      
      <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude" readonly>
    </div>
    
    <div class="form-group input-group">
      <input type="text" class="form-control" id="lng" name="lng" placeholder="Longitude" readonly>
    </div>
   
    


<div class="container-fluid">
<div class="row">
  <div class="col">
  <h4>General Details</h4>     
  </div>
  <div class="col">
  <h4>Incident Narrative </h4>
      
  </div>
  <div class="col">
  <h4>Persons Involved </h4>     
  </div>
  <div class="col">
  <h4>Items Involved </h4>
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
        <input type="text" class="form-control"  placeholder="What Happened"required oninvalid="" id="narrative"name="narrative"/>
      </div>
   
  </div>
  <div class="col">
  <button type="submit" id="person_involved_form"form="person_involved_form" class="btn btn-success"  data-toggle="tooltip" data-placement="top" >Add person</button>

  </div>
  <div class="col">
  <button type="submit" id="add-item-form" form="add-item-form" name="add-item-form" class="btn btn-success ">Add item</button>
   
  
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
        <input type="text" class="form-control"  placeholder="Action Taken"required oninvalid="" id="action_taken"name="action_taken"/>
      </div>
  
  </div>
  <div class="col">
    <div id="persons  ">

    </div>
  </div>
  <div class="col">
  
  </div>
      
</div><!-- end row -->

<div class="row">
  <div class="col">
  <div class="form-group input-group">
      <i class="material-icons">phonelink </i>
        <input type="text" class="form-control"  placeholder="Reported by (ID NUMBER)"required oninvalid="" id="reported_by"name="reported_by"/>
      </div>
    </div>

                
    <div class="col">
    <div class="form-group input-group">
          
          <label for="exampleFormControlSelect1">Incident Status</label>
          <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="incident_status" name="incident_status">
            <option >Incident Status</option>
            <option value="1">Resolved</option>
            <option value="2">Unresolved</option>
            <option value="3">Under Investigation</option>
            <option value="4">Forwarded to OSA</option>
            <option value="5">Forwarded to PNP</option>
            <option value="6">Resolved in OSA</option>
            <option value="7">Settled</option>
            <option value="8">Settled in OSA</option>
            <option value="9">Investigated</option>
            
          </select>               
      </div>
      
    </div>

    <div class="col"> 
  
  </div>

  <div class="col">
   
      </div>
  </div><!-- end row -->


<div class="row">
<div class="col-md-3">
<div class="form-group input-group">
          <select class="form-control selectpicker" data-style="btn btn-link" id="class" name="class">
            <option >Class</option>
            <option value="1">Emergency</option>
            <option value="2">Non-Emergency</option>
           
          </select>         

</div><br>
<div class="form-group input-group">
      <select class="form-control selectpicker " data-style="btn btn-link" id="category" name="category">
            <option >Category</option>
            <option value="1">Disorder</option>
            <option value="2">Drugs</option>
            <option value="3">Death</option>
            <option value="4">Assault</option>
           
            <option value="5">Rape</option>
            <option value="6">Lasciviousness</option>
            <option value="7">Robbery</option>
            <option value="8">Theft</option>
            <option value="9">Breaking and Entering</option>
            <option value="10">Emergency (Disasters)</option>
            <option value="11">Fire</option>
            <option value="12">Vehicular Accidents</option>
            <option value="13">Animal Bite</option>
          </select>         
      </div>

</div>

     
</div>

<br>




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
    
  
  
  </div>

  <div class="col">
  
  </div>
  <div class="col" id="olol">


  </div>
  <div class="col">
  </div>  
</div>






<div class="modal-footer">
  <div class="col-lg-12"> 
    <button type="button" class="btn btn-secondary float-left btn-cancel" aria-label="Close" >
      <i class="fa "></i> Cancel</button>
      <button type="button" class="btn btn-primary float-left btn-add" id="add_marker"name="add_marker" >
      <i class="fa "></i> Save to database</button>
   
     
  </div>
             
 </div><!-- end form-body-->

</form>


<!-- END PHP HERE -->
    </div>
</div>
</div>
</div>

</div>

      </div>
    </div>
  </div>
       
  
<script type="text/javascript" src="app/js/add_marker2.js" onload="initMap2()"charset="UTF-8"></script>

 
   ';
}


?>

          





            
      


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

        <form role="form" method="POST" id="add-person-form" name="add-person-form">
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
                <button type="button" class="btn btn-primary float-right btn-add-person" id="add_person" name="add_person">
                <i class="fa "></i> Save to database</button>
                </form>
                <form method="POST" id="cancel-all" name="cancel-all">
                  <button type="button" class="btn btn-secondary float-right btn-cancel-all" aria-label="Close" >
                  <i class="fa "></i> Close</button>
                </form>
            </div>
                       
           </div><!-- end form-body-->

          
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
        <form role="form" method="POST" id="add-item-form" name="add-item-form">
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
                <button type="button" class="btn btn-primary float-right btn-item-form" id="add_item"name="add_item" >
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


<div class="modal fade bd-example-modal-lg"data-backdrop="static" data-keyboard="false" id="set-lat-lng" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg w-75 p-3">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
          <form role="form" method="POST" id="add-form-map" name="add-form-map" >
            <div id="map"></div>
          </form>
        </div><!-- end modal-body-->


    </div>
  </div>
</div>

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
      console.log('asdasdasd');
             
   });
});


$(function () {
    $('#map_modal').on('click',function (e) {
      $('#set-lat-lng').modal('show');
      console.log('asdasdasd');
             
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
        title: "Are you sure you want to add changes to previous record?",
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

    $(".btn-item-form").click(function(){
      Swal.fire({
        title: "Are you sure you want to add changes to previous record?",
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

<?php
include_once('footer.php');
?>