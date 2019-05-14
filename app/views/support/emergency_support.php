<?php
  include_once('header.php');
  include_once('emergency_nav_support.php');
  ?>

<style>
.modal-dialog{
    position: relative;
    display: table; /* This is important */ 
    overflow-y: auto;    
    overflow-x: auto;
    width: auto;
    min-width: 300px;   
}
</style>

<div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-info">
                    <h4 class="card-title ">Emergency Reports</h4>
                    <p class="card-category"> </p>

                  </div>

                

                <div class="dataTable_wrapper" style="padding:25px;">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered nowrap" id="dataTables-emergency" style="width:100%">
                        <thead class=" text-primary">
                         
                          

                          <th>
                            Date Reported
                          </th>
                         
                          <th>
                           Report Details
                          </th>
                       
                          <th>
                            Report Image
                          </th> 
                          
                          <th>
                            Reporter Name
                          </th> 
                          
                          <th>
                           Contact
                          </th>
                          
                          <th>
                           Reporter ID
                          </th>  
                    
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                          
                        <?php
                        
                                        
                foreach( getEmergency()as $row ){
                      $id = $row['e_report_id'];
                      $date = $row['date_reported'];
                      $report_details = $row['report_details'];
                      $report_image = $row['report_image'];
                      $reporter_name = $row['reporter_fullname']; 
                      $reporter_id = $row['reporter_id'];
                      $reporter_contact = $row['contact_number'];
                      $img = $row['report_image'];
                      $lat = $row['lat'];
                      $lng = $row['lng'];
                      $action =  "index.php?".md5("controller")."=".md5("edit_marker_support");
                              
                          echo'
                          <tr>
                              
                              
                              <td>'.$date.'</td>
                             
                              <td>'.$report_details.'</td>
                              <td><img src="data:image/jpeg;base64,'.$report_image.'" width="90" height="70" data-toggle="modal" data-target="#modal-img'.$id.'"></td>
                              <td>'.$reporter_name.'</td>
                              <td>'.$reporter_contact.'</td>
                              <td>'.$reporter_id.'</td>
                              
                              <td style="width:100px;text-align:center">
                                <a style="cursor:pointer" data-toggle="modal" data-target="#send'.$id.'" title="Edit"><i class="material-icons">
                                add_box
                                </i></a>
                               
                                <a style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><i class="material-icons">
                                clear
                                </i></a>
                                
                              </td>
                          </tr>

                          <div class="modal fade" id="modal-img'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Emergency Report Image</h4>
                                  </div>
                                  
                                  <div class="modal-body">
                                      <div class="col-lg-12">
                                      <center>
                                      <img src="data:image/jpeg;base64,'.$report_image.'">
                                         </center>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <div class="col-lg-12">
                                         
                                      </div>
                                  </div>
                               
                              </div>
                          </div>
                      </div>

                      <div class="modal fade" id="ModalDelete'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Delete Record</h4>
                              </div>
                              
                              <div class="modal-body">
                                  <div class="col-lg-12">
                                 
                                      <form role="form" method="POST">
                                        Are you sure you want to delete this record?
                                        <input type="hidden" name="delete_id" value="'.$id.'">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="col-lg-12">
                                      <button type="button" class="btn btn-primary float-right" data-dismiss="modal"> No <i class="fa fa-refresh"></i></button>
                                      <button type="submit" class="btn btn-danger float-right " name="delete_emergency" ><i class="fa fa-check"></i> Yes</button>
                                  </div>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>


                  <div class="modal fade" id="send'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Save to Record</h4>
                          </div>
                          
                          <div class="modal-body">
                              <div class="col-lg-12">
                             
                                  <form role="form" id="save_emergency" action="'.$action.'"method="POST">
                                    Are you sure you want to save this record?
                                    <input type="hidden" name="marker_id" value="'.$id.'">
                                    <input type="hidden" name="date" value="'.$date.'">
                                    <input type="hidden" name="report_details" value="'.$report_details.'">
                                    <input type="hidden" name="image" value="'.$report_image.'">
                                    <input type="hidden" name="reported_by" value="'.$reporter_id.'">
                                    <input type="hidden" name="lat" value="'.$lat.'">
                                    <input type="hidden" name="lng" value="'.$lng.'">
                                    <input type="hidden" name="picture" value="'.$img.'">
                                    
                                    

                              </div>
                          </div>
                          <div class="modal-footer">
                              <div class="col-lg-12">
                              <button type="button" class="btn btn-primary float-right" data-dismiss="modal"> No <i class="fa fa-refresh"></i></button>
        
                                  <button type="submit" class="btn btn-danger float-right " name="save_emergency" ><i class="fa fa-check"></i> Yes</button>
     
                              </div>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>


                          ';
                          }
                        ?>  
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
                </div>
              </div>
      </div>
    </div>

    <div id="map"></div>
    
    <script>
     
    $(document).ready(function() {
        $('#dataTables-emergency').DataTable();
    } );

    </script>

    
<script>
// When the user clicks on div, open the popup
function myFunction() {
  $('#imgModal').modal('show');
}
</script>


    
<script>
       
  $('#img [data-toggle="tooltip"]').tooltip({
      animated: 'fade',
      placement: 'bottom',
      html: true
  });
</script>  


<script>

$(function () {
    $('#save_emergency').on('submit',function (e) {
              $.ajax({
                type: 'post',
                url: 'app/views/add_marker.php',
                data: $('#save_emergency').serialize(),
                success: function () {
                  // window.location.href();
                }
              });
         // e.preventDefault();
   });
});


$(function () {
    $('#add-item-form').on('click',function (e) {
              $.ajax({
                type: 'post',
                url: 'app/controllers/controller.php',
                data: $('#person_involved_form').serialize(),
                success: function () {
                  add_item();
                }
              });
          e.preventDefault();
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

</script>


<script>
  $('a[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'bottom',
    html: true
});

  </script>
      
  <?php
  include_once('footer.php');
  ?>