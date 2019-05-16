

<?php
include_once('header.php');
include_once('add_marker_nav_support.php');

?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-info card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Incident Details</h4>
                  </div>
                </div>
                <div class="card-body " style="padding:75px;">
                <center>
                <div class="card-text">
                    <h3 class="card-title">Add Incident Record</h3><hr>
                  </div>
</center>
                <form role="form" id="add-form" action="<?php echo "index.php?".md5("controller")."=".md5('edit_marker_support')?>"method="POST">
                    <input type="hidden" name="marker_id" value="888">
                    <input type="hidden" name="lat" id="lat"readonly>
                    <input type="hidden" name="lng" id="lng" readonly>
                    <input type="hidden" name="add_marker" id="add_marker" value="add_marker" readonly>
                    <div class="row">
                      <label class="col-sm-1 col-form-label">Marker ID</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" class="form-control" value="2019-ABC12" disabled>
                        </div>
                      </div>
                    </div>
                    <!-- end first row -->
                  


 
                    <div class="row"> 
                      <div class="btn-group col-sm-4">
                      <label class="col-sm-3 col-form-label">Class</label>
                        <div class="form-group input-group">
                          <select class="form-control selectpicker"data-dropup-auto="false" data-style="btn btn-link" id="class" name="class">
                            <option >Select</option>
                            <option value="1">Emergency</option>
                            <option value="2">Non-Emergency</option>
                          </select>         
                        </div>
                      </div>
                  </div> 

                  
                                  
                <div class="row">
                  <div class="btn-group col-sm-4">
                  <label class="col-sm-3 col-form-label">Category</label>
                    <div class="form-group input-group">
                      <select class="form-control selectpicker " data-dropup-auto="false" data-style="btn btn-link" id="category" name="category">
                            <option >Select</option>
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


                  <div class="row">
                  <div class="btn-group col-sm-4">
                  <label class="col-sm-3 col-form-label">Date</label>
                    <div class="input-group form-control-lg">
                        <div class="form-group bmd-form-group is-filled">
                           
                            <input type="text" class="form-control datetimepicker-input" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date"/>
                            <script>
                                                          
                              var today1 = new Date().toLocaleDateString(undefined, {
                              day: '2-digit',
                              month: 'long',
                              year: 'numeric',
                              hour: '2-digit',
                              minute: '2-digit',
                              });
                              document.getElementById('date').value= today1;
                        </script>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="btn-group col-sm-4">
                  <label class="col-sm-3 col-form-label">Reported by</label>
                    <div class="input-group form-control-lg">
                    <div class="form-group">
                         
                          <input type="text" id="reported_by" name="reported_by" placeholder="ID Number" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="row">
                      <label class="col-sm-1 col-form-label">Location Description</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                        <textarea class="form-control" id="location" name="location" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
             
                  <div style="align-content: center; padding-left:350px;">
                      <div class="row" >
                        <div class="card col-sm-9" style="padding-right:- 50px;">
                          Click on Map to put a Marker
                          <div id="map"style="height: 600px; width: 900px; "></div>
                        </div>
                      </div>
                  </div>
                 
                 

                  <div class="row">
                      <label class="col-sm-1 col-form-label">Incident Narrative</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                        <textarea class="form-control" id="narrative" name="narrative" rows="3"></textarea>
                        </div>
                      </div>
                    </div>

                    
                  <div class="row">
                      <label class="col-sm-1 col-form-label">Action Taken</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                        <textarea class="form-control" id="action_taken" name="action_taken" rows="3"></textarea>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <label class="col-sm-1 col-form-label">Recommendation</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                        <textarea class="form-control" id="recommendation" name="recommendation" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                                        
               <div class="row">
               <div class="btn-group col-sm-4">
                  <label class="col-sm-3 col-form-label">Incident Status</label>
                    <div class="form-group input-group">
                    <select class="form-control selectpicker"  data-dropup-auto="false" required oninvalid="" data-style="btn btn-link" id="incident_status" name="incident_status">
                        <option >Select</option>
                        <option value="1">Resolved</option>
                        <option value="2">Unresolved</option>
                        <option value="3">Under Investigation</option>
                        <option value="4">Forwarded to OSA</option>
                        <option value="5">Forwarded to PNP</option>
                        <option value="6">Resolved in OSA</option>
                        <option value="7">Settled</option>
                        <option value="8">Settled in OSA</option>
                        <option value="9">Investigated</option>
                               
                      </div>
                    </div>
               </div>
                  
                 
                    <div class="row">
                     
                      <div class="col-sm-10">
                        <div class="form-group">
                        <input type="hidden">
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4 ml-auto mr-auto text-center">
                    <button type="submit" name="add_form"class="btn btn-info btn-round">
                      Continue Adding Details
                    </button>
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


                
                </div>
              </div>
            </div>

          
      



<script type="text/javascript" src="app/js/add_marker2.js" onload="initMap2()"charset="UTF-8"></script>

<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>

<script>

$(function () {
    $('#person_involved_form').on('click',function (e) {
      $('#add-person-modal').modal('show');
   });
});

$(function () {
    $('#btn-submit').on('click',function (e) {
      $("#add-form").submit();
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