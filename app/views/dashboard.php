<?php 
include_once('header.php');
include_once('dashboard_nav.php');
?>

      <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card ">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons"></i>
                    </div>
                    <h4 class="card-title">Global Sales by Top Locations</h4>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="table-responsive table-sales">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/US.png" </div>
                                </td>
                                <td>USA</td>
                                <td class="text-right">
                                  2.920
                                </td>
                                <td class="text-right">
                                  53.23%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/DE.png" </div>
                                </td>
                                <td>Germany</td>
                                <td class="text-right">
                                  1.300
                                </td>
                                <td class="text-right">
                                  20.43%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/AU.png" </div>
                                </td>
                                <td>Australia</td>
                                <td class="text-right">
                                  760
                                </td>
                                <td class="text-right">
                                  10.35%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/GB.png" </div>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-right">
                                  690
                                </td>
                                <td class="text-right">
                                  7.87%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/RO.png" </div>
                                </td>
                                <td>Romania</td>
                                <td class="text-right">
                                  600
                                </td>
                                <td class="text-right">
                                  5.94%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/BR.png" </div>
                                </td>
                                <td>Brasil</td>
                                <td class="text-right">
                                  550
                                </td>
                                <td class="text-right">
                                  4.34%
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                          </div>
                          <div class="col-md-6 ml-auto mr-auto">
                            <div id="map" style="height: 350px;"></div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                        </div>
                        <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
7 days
</button> -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-rose" data-header-animation="true">
                                <div class="ct-chart" id="websiteViewsChart"></div>
                              </div>
                              <div class="card-body">
                                <div class="card-actions">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                                    <i class="material-icons">refresh</i>
                                  </button>
                                  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                                    <i class="material-icons">edit</i>
                                  </button>
                                </div>
                                <h4 class="card-title">Website Views</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-success" data-header-animation="true">
                                <div class="ct-chart" id="dailySalesChart"></div>
                              </div>
                              <div class="card-body">
                                <div class="card-actions">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                                    <i class="material-icons">refresh</i>
                                  </button>
                                  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                                    <i class="material-icons">edit</i>
                                  </button>
                                </div>
                                <h4 class="card-title">Daily Sales</h4>
                                <p class="card-category">
                                  <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-info" data-header-animation="true">
                                <div class="ct-chart" id="completedTasksChart"></div>
                              </div>
                              <div class="card-body">
                                <div class="card-actions">
                                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                  </button>
                                  <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                                    <i class="material-icons">refresh</i>
                                  </button>
                                  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                                    <i class="material-icons">edit</i>
                                  </button>
                                </div>
                                <h4 class="card-title">Completed Tasks</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">weekend</i>
                                </div>
                                <p class="card-category">Bookings</p>
                                <h3 class="card-title">184</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons text-danger">warning</i>
                                  <a href="#pablo">Get More Space...</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">equalizer</i>
                                </div>
                                <p class="card-category">Website Visits</p>
                                <h3 class="card-title">75.521</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">local_offer</i> Tracked from Google Analytics
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">store</i>
                                </div>
                                <p class="card-category">Revenue</p>
                                <h3 class="card-title">$34,245</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                  <i class="fa fa-twitter"></i>
                                </div>
                                <p class="card-category">Followers</p>
                                <h3 class="card-title">+245</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">update</i> Just Updated
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>






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
                      <table class="table table-striped table-bordered nowrap" id="dataTables-example-2" style="width:100%">
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
                            Reported BY
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
                                  <a style="cursor:pointer" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><i class="fa fa-edit"></i></a>
                                  <a style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><i class="fa fa-remove"></i></a>
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
                                              <div class="col-lg-12">
                                             
                                                  <form role="form" method="POST" >
                                                      <input type="hidden" name="edit_id" value="'.$id.'">
                                                      <div class="form-group input-group">
                                                          <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                          <input type="text" class="form-control" name="lat" placeholder="Latitude" value="'.$lat.'">
                                                      </div>

                                                      <div class="form-group input-group">
                                                          <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                          <input type="text" class="form-control" name="lng" placeholder="Longitude" value="'.$lng.'">
                                                      </div>

                                                        
                                                      <div class="form-group input-group">
                                                          <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                          <input type="text" class="form-control" name="date" placeholder="Date" value="'.$date.'">
                                                      </div>
                                                      <div class="form-group input-group">
                                                          <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                          <input type="text" class="form-control" name="location" placeholder="Location" value="'.$location.'">
                                                      </div>
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <div class="col-lg-12">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-info" name="edit_submit" ></i> Update Records</button>
                                              </div>
                                          </div>
                                        </form>
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
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
                </div>
              </div>
      </div>
    </div>
    
<!-- map-->
<script type="text/javascript" src="app/js/map.js" onload="initMap()"></script>
<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>
  <!-- datables for our table -->
  <script src="app/js/datatables.js"></script>
