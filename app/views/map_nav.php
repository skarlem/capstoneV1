 
 

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

          <li class="nav-item ">
        <a class="nav-link" href="<?php echo "index.php?".md5("controller")."=".md5('add_marker')?>">
        <i class="material-icons">
note_add
</i>
          <p>Add Markers</p>
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
                data-toggle="tooltip" data-placement="top" title="ex. 12/22/2017 as MM/DD/YYYY" value="January 01, 1990, 00:00"/>
            </li>
            
            <li class="nav-item">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <p>End date</p>
                  </span>
                </div>
                <input type="text" class="form-control datetimepicker" id="dp2"class="btn btn-secondary" 
                data-toggle="tooltip" data-placement="top" title="ex. 12/22/2017 as MM/DD/YYYY"/>
                <script>
                
                var today1 = new Date().toLocaleDateString(undefined, {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                });
                  document.getElementById('dp2').value= today1;
                </script>
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
                <div class="form-group input-group">
                    <select class="form-control selectpicker"  onchange="populate(this.id,'select_category_nav')" required oninvalid="" data-style="btn btn-link" id="classification_nav" name="classification_nav">
                      <option >Classification</option>
                      <option value='1'>Crimes against Person</option>
                      <option value='2'>Crimes against Chastity</option>
                      <option value='3'>Crimes against Property</option>
                      <option value='4'>Emergency</option>
                    </select>               
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
                  <label class="form-check-label">
                    <input class="form-check-input"  onclick="checkAllCategory()" id="checkAllCategory"type="checkbox"  checked>
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
                <div class="form-check" id="select_category_nav">
                  
            </div>
              </div>
              
<script type="text/javascript">
 var val = 1;
    function populate(slct1, slct2) {
        var s1 = document.getElementById(slct1);
        var s2 = document.getElementById(slct2);
        s2.innerHTML = "";
        if (s1.value == "1") {
            var optionArray = ["Disorder", "Drugs", "Death","Assault"];
        } else if (s1.value == "2") {
            var optionArray = ["Rape", "Lasciviousness"];
        } else if (s1.value == "3") {
            var optionArray = ["Robbery", "Theft", "Breaking and Entering"];      
      }
      else if (s1.value == "4") {
            var optionArray = ["Emergency (Disasters)", "Fire", "Vehicular Accident","Animal Bite"];
      }

    for (var option in optionArray) {
     
        if (optionArray.hasOwnProperty(option)) {
            var pair = optionArray[option];
            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.name = 'category';
            checkbox.value = pair;
            checkbox.checked=true;
            checkbox.id = 'category';
            s2.appendChild(checkbox);
    
            var label = document.createElement('label')
            label.htmlFor = pair;
            label.appendChild(document.createTextNode(pair));

            s2.appendChild(label);
            s2.appendChild(document.createElement("br"));    
        }
    }
}
</script>
             

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
            <a class="navbar-brand" href="">Map</a>
          </div>

         
          
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>

 
      </nav>



