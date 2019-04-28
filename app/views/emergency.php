<?php
  include_once('header.php');
  include_once('emergency_nav.php');
  ?>


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <ul class="timeline timeline-simple">
                
                <?php
                    foreach( getEmergency()as $row ){
                        $id = $row['e_report_id'];
                        $date = $row['date_reported'];
                        $report_details = $row['report_details'];
                        $report_image = $row['report_image'];
                        $reporter_name = $row['reporter_fullname']; 
                        $reporter_id = $row['reporter_id'];
                        $reporter_contact = $row['contact_number'];
                        $img = 'app/views/assets/img/logo-small.png';
                        $lat = $row['lat'];
                        $lng = $row['lng'];
                        echo'
                        <li class="timeline-inverted">
                        <div class="timeline-badge info">
                          <i class="material-icons">schedule</i>
                        </div>
                        <div class="timeline-panel">
                          <div class="timeline-heading">
                            <span class="badge badge-pill badge-info">'.$date.'</span>

                            <button type="button" class="btn btn-secondary float-right" data-toggle="modal"  data-target="#ModalDelete'.$id.'" aria-label="Close" >
                            <i class="fa "></i> Delete</button>

                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"  data-target="#exampleModal'.$id.'" aria-label="Close" >
                            <i class="fa "></i> Save</button>
                            
                           

                          </div>
                          <div class="timeline-body" style="margin-bottom: 50px;">
                          <div class="card card-testimonial">
                          <div class="icon">
                            <i class="material-icons">format_quote</i>
                          </div>
                          <div class="card-body">
                            <h5 class="card-description">
                           '.$report_details.'
                            </h5>
                          </div>
                          <div class="card-footer">
                              
                         
                               
        
                            <h4 class="card-title">
                            '.$reporter_name.'
                            </h4>

                            <h6 class="card-category">
                            '.$reporter_contact.'
                            </h6>
                           
                            <div class="card-avatar" id="img">
                                <img class="img" data-toggle="tooltip" data-placement="top" title="<img src='.$report_image.' />"  src="'.$report_image.'" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </li>
                
      
                  </ul>
                </div>
              </div>
                      </div><!-- End of Fluid -->
                     
                      </div><!-- End of Content -->


                      

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
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">No <i class="fa fa-refresh"></i></button>
                                      <button type="submit" class="btn btn-danger" name="delete_submit" ><i class="fa fa-check"></i> Yes</button>
                                  </div>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>
                  

                  

<div class="modal fade bd-example-modal-lg" id="exampleModal'.$id.'" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
              
              <input type="hidden" class="form-control" id="add-form" name="add-form-emergency" readonly>
            </div>
      <div class="form-group input-group">
              
              <input type="hidden" class="form-control" id="lat" name="lat" placeholder="Latitude" value="'.$lat.'" readonly>
            </div>
            
            <div class="form-group input-group">
              <input type="hidden" class="form-control" id="lng" name="lng" placeholder="Longitude" value="'.$lng.' "readonly>
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
                <input type="text" class="form-control datetimepicker-input" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date" value="'.$date.'"/>
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
                <input type="text" class="form-control" id="reported_by"required  oninvalid=""  name="reported_by" value="'.$reporter_id.'" placeholder="Reported By(Required)">
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
                      <option value="1">Victim</option>
                      <option value="2">Suspect</option>
                      <option value="3">Witness</option>
                      <option value="4">Investigator</option>
                      <option value="5">Roving Guards</option>
                      
                    </select>               
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
          </div><!-- end row -->


        <div class="row">
          <div class="col">
            <div class="form-group input-group">
                
                <label for="exampleFormControlSelect1">Classification</label>
                <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="classification" name="classification">
                  <option >Incident Classification</option>
                  <option value="1">Felony</option>
                  <option value="2">Misdemeanor</option>
                  <option value="3">Violation</option>
                  <option value="4">Incident</option>
                  
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
                 <option value="1"s>Theft</option>
                 <option value="2">Destruction of Property</option>
                 <option value="3">Vehicular Incident</option>
                 <option value="4">Animal Bite</option>
                 <option value="5">Assault</option>
                 <option value="6">Fire</option>
               </select>               
           </div>
          </div>
          <div class="col">
          <button type="submit"id="asd" class="btn btn-primary float-right">click me</button>
          </div>
          <div class="col" id="olol">
      

<button type="submit"id="asd" class="btn btn-primary float-right"  data-toggle="tooltip" data-placement="top">click me</button>
        
          </div>
          <div class="col">
          </div>  
        </div>






        <div class="form-group input-group">
              
              <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value="2 ">
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
      
                        ';
                    }
                ?>






<script>
       
  $('#img [data-toggle="tooltip"]').tooltip({
      animated: 'fade',
      placement: 'bottom',
      html: true
  });
</script>         
      
  <?php
  include_once('footer.php');
  ?>