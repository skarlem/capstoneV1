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
                    <h4 class="card-title">Map Markers</h4>
                  </div>
                  <div class="card-body ">
                    <div class="row">

                      <div class="col-md-4">


                    <div class="form-group">
                        <label class="label-control">Start Date</label>
                        <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                    </div>

                    <div class="form-group">
                        <label class="label-control">End Date</label>
                        <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                    </div>
<br>
<br>
<br>
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

<br>

                       <button class="btn btn-primary" onclick="clearMarkers()">Show Markers</button>
                      </div><!-- end column 1-->

                      <!-- start column 2-->
                          <div class="col-md-8">
                            <div id="map" style="height: 550px;width: 100%; padding-left:800px; "></div>
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
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">weekend</i>
                                </div>
                                <p class="card-category">Total Crimes Reported</p>
                                <h3 class="card-title">184</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons text-danger">warning</i>
                                  <a href="#pablo">All time</a>
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
                                <p class="card-category">Total number of users</p>
                                <h3 class="card-title">750</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">update</i> 
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
                                <p class="card-category">Pending Reports</p>
                                <h3 class="card-title">123</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">date_range</i> All time
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
                                <p class="card-category">Closed Cases</p>
                                <h3 class="card-title">245</h3>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">update</i> Just Updated
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>




    
<!-- map-->
<script type="text/javascript" src="app/js/dashboard_map.js"onload="initMap()">

</script>


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

                  md.initVectorMap();

                });
              </script>



