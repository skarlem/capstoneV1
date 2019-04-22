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
                        $reporter_contact = $row['contact_number'];

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

                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"  data-target="#ModalEdit'.$id.'" aria-label="Close" >
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
                           
                            <div class="card-avatar">
                              <a href="#pablo">
                                <img class="img" data-toggle="tooltip" data-placement="top"  title="animal<br><img src=https://placeimg.com/100/100/animals>" src="'.$report_image.'" />
                              </a>
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
                  
      
                        ';
                    }
                ?>
                
      
  <?php
  include_once('footer.php');
  ?>