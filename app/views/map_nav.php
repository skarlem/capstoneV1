 
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Bantay MSU
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('table')?>">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          
         
          <li class="nav-item active ">
            <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('map')?>">
              <i class="material-icons">location_ons</i>
              <p>Filter Map</p>
            </a>
          </li>
<br>
          <li class="nav-item">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                    <p>Start date</p>
                </span>
              </div>
              
                <input type='text' class="form-control" id='dp1' value="01/01/2010" />
            </div>
            <div class="input-append date form_datetime" data-date="2013-02-21T15:25:00Z">
            <input size="16" type="text" value="">
            <span class="add-on"><i class="icon-remove"></i></span>
            <span class="add-on"><i class="icon-calendar"></i></span>
            </div>
          </li>
          <br>
          <script>
    $("dp1").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "2013-02-14 10:00",
        minuteStep: 10
    });
</script>
           <li class="nav-item">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                    <p>End date</p>
                </span>
              </div>
               <input type='text' class="form-control" id='dp2'value="12/31/2018" />
            </div>
          </li>
        <br>
        <li class="nav-item">
           
        <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">      
                </span>
              </div>
               <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input"  onclick="checkAll()" id="checkAll" type="checkbox">
                    Select All
                  <span class="form-check-sign">
                <span class="check"></span>
              </span>
            </label>
          </div>
            </div>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">      
                </span>
              </div>
               <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input"  onclick="loadMarkersbyType()" name="search_by_type" type="checkbox" value="0">
                    Theft
                  <span class="form-check-sign">
                <span class="check"></span>
              </span>
            </label>
          </div>
            </div>

             <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">      
                </span>
              </div>
               <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input"  onclick="loadMarkersbyType()" name="search_by_type" type="checkbox" value="1">
                    Vehicular Incident
                  <span class="form-check-sign">
                <span class="check"></span>
              </span>
            </label>
          </div>
            </div>
             <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">      
                </span>
              </div>
               <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" onclick="loadMarkersbyType()" name="search_by_type" type="checkbox" value="2">
                    Fire
                  <span class="form-check-sign">
                <span class="check"></span>
              </span>
            </label>
          </div>
            </div>

             <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">      
                </span>
              </div>
               <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" onclick="loadMarkersbyType()" name="search_by_type" type="checkbox" value="3">
                    Physical Injuries
                  <span class="form-check-sign">
                <span class="check"></span>
              </span>
            </label>
          </div>
            </div>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">      
                </span>
              </div>
               <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" onclick="loadMarkersbyType()" name="search_by_type" type="checkbox" value="4">
                   Animal Bite
                  <span class="form-check-sign">
                <span class="check"></span>
              </span>
            </label>
          </div>
            </div>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">      
                </span>
              </div>
               <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" onclick="loadMarkersbyType()" name="search_by_type" type="checkbox" value="5">
                   Sexual Harassment
                  <span class="form-check-sign">
                <span class="check"></span>
              </span>
            </label>
          </div>
            </div>

          </li>

          <li class="nav-item active" onclick="clearMarkers()">
            <a class="nav-link">
              <i class="material-icons">done</i>
              <p>Save Changes</p>
            </a>
          </li>
        

        </ul>
       
        
      </div>

      
    </div>
  

           <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="/.">Map</a>
          </div>
          
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <?php
              require 'app/models/notif_model.php';

              ?>
          <!-- dropdown for notification--> 
          <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification"><?php  echo getNumRows()?></span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 
              <div class="dataTable_wrapper">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered nowrap" id="dataTables-example" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          Notifications
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        
                      <?php
                       foreach( getNotif() as $row ){
                         $id = $row['id'];
                          $log = $row['loginfo'];  
                        echo'
                        <tr>
                            <td>'.$log.'</td>
                            
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
                                                 <form role="form" method="POST">
                                                    <input type="hidden" name="edit_id" value="'.$id.'">
                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                        <input type="text" class="form-control" name="lat" placeholder="Latitude" value="">
                                                    </div>

                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                        <input type="text" class="form-control" name="lng" placeholder="Longitude" value="">
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
                </div><!-- end div for table-->
                  
                </div>
              </li>
             <!-- /dropdown for noticification--> 


             <!-- dropdown for settings--> 
             <li class="nav-item dropdown">
                <a class="nav-link"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">settings</i>
                  
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo "index.php?".md5("controller")."=".md5('map')?>">Account</a>
                  <a class="dropdown-item" href="./app/controllers/logout.php">Logout</a>
                  
                  
                </div>
              </li>
             <!-- /dropdown for settings--> 
             
              

            </ul>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>

 
      </nav>
