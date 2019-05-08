  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="azure" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

       <div class="logo">
        <a href="#" class="simple-text logo-normal">
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
          
          <li class="nav-item active ">
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
         
          <li class="nav-item">
            <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('map')?>">
              <i class="material-icons">location_ons</i>
              <p>Map</p>
            </a>
          </li>

          <li class="nav-item ">
        <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('add_marker')?>">
        <i class="material-icons">
note_add
</i>
          <p>Add Markers</p>
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
            <a class="navbar-brand" href="">Marker List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">


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
        </div>

 
      </nav>