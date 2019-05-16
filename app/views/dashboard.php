<?php 
include_once('header.php');
include_once('dashboard_nav.php');
?>

      <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row-responsive">
              <div class="col-md-12">
                <div class="card ">
                
                <div class="card-header card-header-info card-header-text">
        <div class="card-text">
          <h4 class="card-title">Showing Incident Records for the Past Month</h4>
        </div>
      </div>
      <div class="card-body " style="padding:50px;">
                   <div class="row">
                      <!-- start column 2-->
                          <div class="col-md-8" style="padding-left:20px; padding-bottom: 20px;">
                            <div id="map" style="height:550px;width: 100%;   ">
                            
                            </div>
                           
                          </div>

                          <div class="col-md-4">
                          
                          
            
  <br><br>
              
                <input type="text" required oninvalid=""
                id="date1"name="date1" readonly/>
                <script>
                 var today1 = new Date();

                 console.log(today1);
                  today1.setMonth(today1.getMonth() - 1);

                  var now = today1.toLocaleDateString(undefined,{
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                  });
                  //console.log(today1.toLocaleDateString());
                  document.getElementById('date1').value=now;
                </script>
                
         
           
          
              <div class="input-group">
                
               
                  <input type="text" id="date2"name="date2" readonly />
                
                <script>
                var today1 = new Date().toLocaleDateString(undefined, {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                    
                });

                
                  document.getElementById('date2').value= today1;
                </script>
              </div>
           
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
                    <select class="form-control selectpicker"  onchange="populate(this.id,'select_category')" required oninvalid="" data-style="btn btn-link" id="classification_nav" name="classification_nav">
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
                <div class="form-check" id="select_category">
                  
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

            <button class="btn btn-info" onclick="clearMarkers()">Apply Filter</button>
    
                           </div><!-- end col-->


            <div class=".col-6 .col-md-4">



            
                          </div><!-- end col -->
                        </div> <!-- end row -->
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                        </div>
</div>
                        <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
7 days
</button> -->
                        


<div class="row" style="padding:40px;">
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">weekend</i>
                                </div>
                                <p class="card-category">Total Incident Records</p>
                                <h3 class="card-title"><?php
                                echo getTotalCrime()[0][0];
                                ?></h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons text-danger">warning</i>
                                  <a href="#pablo">As of <script>
                var today1 = new Date().toLocaleDateString(undefined, {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                    
                }); 
                  document.write(today1);
                </script></a>
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
                                <p class="card-category">Total Number of Users</p>
                                <h3 class="card-title">
                                <?php
                                echo getTotalUsers()[0][0];
                                ?>
                                </h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">update</i> 
                                  As of <script>
                var today1 = new Date().toLocaleDateString(undefined, {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                    
                }); 
                  document.write(today1);
                </script>
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
                                <p class="card-category">Incidents Under Investigation</p>
                                <h3 class="card-title"><?php
                                echo getTotalInvestitation()[0][0];
                                ?></h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">date_range</i> As of <script>
                var today1 = new Date().toLocaleDateString(undefined, {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                    
                }); 
                  document.write(today1);
                </script>
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
                                <p class="card-category">Closed Incidents</p>
                                <h3 class="card-title"><?php
                                echo getTotalResolved()[0][0];
                                ?></h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">update</i> As of <script>
                var today1 = new Date().toLocaleDateString(undefined, {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric',
                    
                }); 
                  document.write(today1);
                </script>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>



                        
                        <div class="row" style="padding:20px;">
                        <div class="col-md-12">
                          <div class="card ">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                <i class="material-icons"></i>
                                </div>
                               
                                <div class="dataTable_wrapper">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered nowrap" id="dataTables-example-2" style="width:100%">
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
                           Classification
                          </th>
                          <th>
                            Category
                          </th> 

                          <th>
                          Victim
                          </th>
                          
                          <th>
                          Suspect
                          </th>

                          <th>
                          Incident Status
                          </th>

                          <th>
                            Reported By
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
                             
                              $victim = $row['victim'];
                              $suspect =$row['suspect'];
                             
                             
                              $reported_by=$row['reported_by'];
                              $classification=$row['classification_desc'];
                              $classi = $row['classification'];
                              $status = $row['status_description'];
                              
                          echo'
                          <tr>
                              
                              <td>'.$id.'</td>
                              <td>'.$date.'</td>
                             
                              <td>'.$location.'</td>
                              
                              <td>
                              
                              

                              <span class="badge badge-pill badge-info">'.$classification.'
                              
                              
                              </span></td>
                              <td>'.$category.'</td>
                             
                              <td>'.$victim.'</td>
                              <td>'.$suspect.'</td>
                             
                              <td><span class="badge badge-pill badge-primary">'.$status.'</span></td>
                              <td>'.$reported_by.'</td>
                             
                             
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

                            </div>
                          </div>
                        </div>
                      </div>
                      
    

    
<!-- map-->
<script type="text/javascript" src="app/js/dashboard_map.js" onload="initMap2()"></script>
<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>




  <!-- datables for our table -->
  <script src="app/js/datatables.js"></script>

  <script>
                $(document).ready(function() {
                  $().ready(function() {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                      if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                      }

                    }

                    $('.fixed-plugin a').click(function(event) {
                      // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                      if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                          event.stopPropagation();
                        } else if (window.event) {
                          window.event.cancelBubble = true;
                        }
                      }
                    });

                    $('.fixed-plugin .active-color span').click(function() {
                      $full_page_background = $('.full-page-background');

                      $(this).siblings().removeClass('active');
                      $(this).addClass('active');

                      var new_color = $(this).data('color');

                      if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                      }

                      if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                      }

                      if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                      }
                    });

                    $('.fixed-plugin .background-color .badge').click(function() {
                      $(this).siblings().removeClass('active');
                      $(this).addClass('active');

                      var new_color = $(this).data('background-color');

                      if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                      }
                    });

                    $('.fixed-plugin .img-holder').click(function() {
                      $full_page_background = $('.full-page-background');

                      $(this).parent('li').siblings().removeClass('active');
                      $(this).parent('li').addClass('active');


                      var new_image = $(this).find("img").attr('src');

                      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                          $sidebar_img_container.fadeIn('fast');
                        });
                      }

                      if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                          $full_page_background.fadeIn('fast');
                        });
                      }

                      if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                      }

                      if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                      }
                    });

                    $('.switch-sidebar-image input').change(function() {
                      $full_page_background = $('.full-page-background');

                      $input = $(this);

                      if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                          $sidebar_img_container.fadeIn('fast');
                          $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                          $full_page_background.fadeIn('fast');
                          $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                      } else {
                        if ($sidebar_img_container.length != 0) {
                          $sidebar.removeAttr('data-image');
                          $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                          $full_page.removeAttr('data-image', '#');
                          $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                      }
                    });

                    $('.switch-sidebar-mini input').change(function() {
                      $body = $('body');

                      $input = $(this);

                      if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                      } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                          $('body').addClass('sidebar-mini');

                          md.misc.sidebar_mini_active = true;
                        }, 300);
                      }

                      // we simulate the window Resize so the charts will get updated in realtime.
                      var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                      }, 180);

                      // we stop the simulation of Window Resize after the animations are completed
                      setTimeout(function() {
                        clearInterval(simulateWindowResize);
                      }, 1000);

                    });
                  });
                });
              </script>
              <script>
                $(document).ready(function() {
                  // Javascript method's body can be found in assets/js/demos.js
                  md.initDashboardPageCharts();

                });
              </script>



