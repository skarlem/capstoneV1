  <?php
  include_once('header.php');
  include_once('marker_nav.php');
  ?>




        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
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
                            ID
                          </th>
                          <th>
                            Latitude
                          </th>
                          <th>
                            Longitude
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Location Description
                          </th>
                          <th>
                            Persons Involved
                          </th>
                          <th>
                          Victim
                          </th>
                          <th>
                          Suspect
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
                            Reported By
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
                          echo'
                          <tr>
                              <td>'.$id.'</td>
                              <td>'.$lat.'</td>
                              <td>'.$lng.'</td>
                              <td>'.$date.'</td>
                              <td>'.$location.'</td>
                              <td>'.$persons_involved.'</td>
                              <td>'.$victim.'</td>
                              <td>'.$suspect.'</td>
                              <td>'.$incident_narrative.'</td>
                              <td>'.$action_taken.'</td>
                              <td>'.$classification.'</td>
                              <td>'.$reported_by.'</td>
                              <td style="width:100px;text-align:center">
                             <button class="btn btn-primary btn-block" name="manage_report"type="submit" href="<?php echo "index.php?".md5("controller")."=".md5(."manage_report".)?>"><i class="fa fa-edit"></i>
                              </button>
                              
                              </td>
                          </tr>
                                  
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