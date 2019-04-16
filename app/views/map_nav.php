 
 

  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="assets/marker/asd.png" class="simple-text logo-normal" >
        <img src="app/views/assets/img/logo-small.png"> Bantay MSU
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('dashboard')?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('table')?>">
              <i class="material-icons">content_paste</i>
              <p>Incident Summary</p>
            </a>
          </li>
          
     <li class="nav-item ">
        <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('accountsall')?>">
          <i class="material-icons">timeline</i>
          <p>Accounts Management</p>
        </a>
      </li>
         
          <li class="nav-item active ">
            <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('map')?>">
              <i class="material-icons">location_ons</i>
              <p>Map</p>
            </a>
          </li>

          
     
          
          <li class="nav-item">
        <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('emergency')?>">
        <i class="material-icons">
report_problem
</i>
          <p>Emergency Reports</p>
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
  
                <input type="text" class="form-control datetimepicker" id="dp1" class="btn btn-secondary" 
                data-toggle="tooltip" data-placement="top" title="ex. 12/22/2017 as MM/DD/YYYY" value="12/12/1990"/>
            </li>
            
            <li class="nav-item">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <p>End date</p>
                  </span>
                </div>
                <input type="text" class="form-control datetimepicker" id="dp2"class="btn btn-secondary" 
                data-toggle="tooltip" data-placement="top" title="ex. 12/22/2017 as MM/DD/YYYY" value="12/12/2990"/>
              </div>
            </li>
          <br>
          <li class="nav-item">
            

            <br>
          <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">      
    </span>
  </div>
  <div class="form-check">
    <label class="form-check-label">
     
    <span class="badge badge-success">Classification</span>
     
    <span class="check"></span>
  </span>
</label>
</div>
</div>
<br>


<div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">      
                  </span>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input"  onclick="checkAll()" id="checkAll"type="checkbox"  checked>
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
                    <input class="form-check-input"  onclick="loadMarkersbyType()" name="classification"id="classification" type="checkbox" value="1" checked>
                      Felony
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
                    <input class="form-check-input"  onclick="loadMarkersbyType()" name="classification"id="classification" type="checkbox" value="2" checked>
                      Misdemeanor
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
                    <input class="form-check-input"  onclick="loadMarkersbyType()" name="classification"id="classification" type="checkbox" value="3" checked>
                      Violation
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
                    <input class="form-check-input"  onclick="loadMarkersbyType()" name="classification"id="classification" type="checkbox" value="4" checked>
                      Incident
                    <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
              </div>
<br>  

              <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">      
    </span>
  </div>
  <div class="form-check">
    <label class="form-check-label">
     
     <span class="badge badge-success">Category</span>
     
    <span class="check"></span>
  </span>
</label>
</div>
</div>
<br>
            
                 <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">      
                  </span>
                </div>
                <div class="form-check">
                
                <button type="button" class="btn btn-success btn-fab btn-fab-mini" data-toggle="modal" data-target="#category_modal">
                    <i class="material-icons">add</i> 
                </button>
                Add Category
                  
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
                    <input class="form-check-input"  onclick="checkAllCategory()" id="checkAllCategory"type="checkbox"  checked>
                      Select All
                    <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
              </div>


<?php 
 foreach( getCategory()as $row ){
  $value = $row['category_id'];
  $desc = $row['category_desc'];
  echo'
  <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">      
    </span>
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input"  name="category" id="category" type="checkbox" value="'.$value.'" checked>
      '.$desc.'
      <span class="form-check-sign">
    <span class="check"></span>
  </span>
</label>
</div>
</div>
';
}
?>

              

             

            </li>

            <li class="nav-item active" onclick="clearMarkers()">
              <a class="nav-link">
                <i class="material-icons">done</i>
                <p>Apply Filter</p>
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
            <a class="navbar-brand" href="#">Map</a>
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
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
             
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
                  <a class="dropdown-item" href="<?php echo "index.php?".md5("controller")."=".md5('editAccount')?>">Account</a>
                  <a class="dropdown-item" href="index.php?controller=<?php echo md5('logout');?>">Logout</a>
                  
                  
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


      
<!-- Modal -->
<div class="modal fade" id="category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method="POST">
          <div class="form-group input-group">
               <span class="input-group-addon"><i class="material-icons">event_note</i></span>
          <input type="text" class="form-control" required oninvalid="" id="category"name="category" placeholder="Add Category"/>
        </div>
      </div>
      <div class="modal-footer">
          <div class="col-lg-12">
              <button type="submit" class="btn btn-primary" name="add_category" >
               <i class="fa "></i> Save to database</button>
          </div>
                       
      </div>
      </form>
    </div>
  </div>
</div>

