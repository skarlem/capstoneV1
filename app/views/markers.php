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
                                <a style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><i class="material-icons">zoom_out_map</i></a>
                                
                              </td>
                          </tr>
                                           
                          <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title" id="myModalLabel">Modify Record</h4>
                                  </div>
                                  
                                  <div class="modal-body">
                                     
                              
<div class="content">
<div class="container-fluid">
  <div class="row">
    
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">perm_identity</i>
          </div>
          <h4 class="card-title">Edit Profile -
            <small class="category">Complete your profile</small>
          </h4>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Company (disabled)</label>
                  <input type="text" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Email address</label>
                  <input type="email" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Fist Name</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Last Name</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Adress</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">City</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Country</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Postal Code</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>About Me</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, Im in that two seat Lambo.</label>
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    
    
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