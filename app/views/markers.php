  <?php
  include_once('header.php');
  include_once('marker_nav.php');
  ?>




        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-info">
                    <h4 class="card-title ">Markers Table</h4>
                    <p class="card-category"> </p>

                  </div>

                

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="map"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

                <div class="dataTable_wrapper">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered nowrap" id="dataTables-example" style="width:100%">
                        <thead class=" text-primary">
                         
                          <th>
                            Id Number 
                          </th>

                          <th>
                            Date
                          </th>
                         
                          <th>
                            Location Description
                          </th>

                          <th>
                           Item/Unit
                          </th>

                          <th>
                          Victim
                          </th>
                          
                          <th>
                          Incident Narrative
                          </th>

                          <th>
                          Action Taken
                          </th>

                          <th>
                            Classification
                          </th>
                          
                          <th>
                            Category
                          </th> 
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                          
                        <?php
                        
                        foreach( getMarkers()as $row ){
                              $id = $row['marker_id'];
                              $lat = $row['lat'];
                              $lng = $row['lng'];
                              $date = $row['date'];
                              $location = $row['location_description'];
                              $category = $row['category_desc'];
                              $persons_involved= $row['persons_involved'];
                              $victim = $row['victim'];
                              $suspect =$row['suspect'];
                              $incident_narrative=$row['incident_narrative'];
                              $action_taken=$row['action_taken'];
                              $reported_by=$row['reported_by'];
                              $classification=$row['classification_desc'];
                              $school_id=$row['school_id'];
                              
                          echo'
                          <tr>
                              
                              <td>'.$id.'</td>
                              <td>'.$date.'</td>
                             
                              <td>'.$location.'</td>
                              <td></td>
                              <td>'.$victim.'</td>
                              
                              <td>'.$incident_narrative.'</td>
                              <td>'.$action_taken.'</td>
                              <td>'.$classification.'</td>
                              <td>'.$category.'</td>
                              <td style="width:100px;text-align:center">
                                <a style="cursor:pointer" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><i class="fa fa-edit"></i></a>
                                <a style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><i class="fa fa-remove"></i></a>
                                <a style="cursor:pointer" data-toggle="modal" data-target="#Modal'.$id.'" title="Delete"><i class="material-icons">zoom_out_map</i></a>
                                
                              </td>
                          </tr>


                          
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
                                  <div class="modal-footer justify-content-between">
                                      <div class="col-lg-12">
                                          <button type="submit" class="btn btn-info float-right" name="delete_submit" > Yes</button>
                                          <button type="button" class="btn btn-default float-right" data-dismiss="modal">No</button>
                                         
                                      </div>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                                           
                      <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Modify Record</h4>
                              </div>
                              
                              <div class="modal-body">
                                  <div class="col-lg-12">
                                      <form role="form" method="POST">
                                          <input type="hidden" name="edit_id" value="'.$id.'">
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">location_on</i></span>
                                              <input type="text" class="form-control" name="lat" placeholder="Latitude" value="'.$lat.'" readonly>
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">location_on</i></span>
                                              <input type="text" class="form-control" name="lng" placeholder="Longitude" value="'.$lng.'" readonly>
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                              <input type="text" class="form-control" name="date" placeholder="Date" value="'.$date.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
                                              <input type="text" class="form-control" name="location" placeholder="Location" value="'.$location.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="persons_involved" placeholder="Persons Involved" value="'.$persons_involved.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="victim" placeholder="Victim" value="'.$victim.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="suspect" placeholder="Suspect" value="'.$suspect.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="incident_narrative" placeholder="Incident Narrative" value="'.$incident_narrative.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="action_taken" placeholder="Action Taken" value="'.$action_taken.'">
                                          </div>
                                          <div class="form-group input-group">
             
                                                   
                                      </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="reported_by" placeholder="Reported By " value="'.$school_id.'">
                                          </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="col-lg-12">
                                      <button type="submit" class="btn btn-info float-right" name="edit_submit" ></i> Update Records</button>
                                      <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                                      
                                  </div>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>



                                  
                          <script>console.log("asda");</script>
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

  <!-- datables for our table -->
  <script src="app/js/datatables.js"></script>

  <?php
  include_once('footer.php');
  ?>