 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="app/views/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="app/views/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Bantay-e
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="app/views/assets/css/material-kit.css?" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="app/views/assets/demo/demo.css" rel="stylesheet" />
  <link href="app/views/assets/demo/vertical-nav.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#"><img class="img" ">BANTAY-E for MSU-GSC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

            <div class="btn-group">
             <button data-toggle="modal" data-target="#loginModal" type="button" class="btn btn-info btn-round">Login
               <i class="material-icons">account_circle</i>
             </button>              
           </div>

    </div>
  </nav>

             <!-- Login Modal -->
           <div class="modal fade" data-backdrop="false" id="loginModal" tabindex="-1" role="">
            <div class="modal-dialog modal-login">
              <div class="modal-content">
                <div class="card card-signup card-plain">
                  <div class="modal-header">
                    <div class="card-header card-header-info text-center">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="card-title">Log in</h4>
                    </div>
                  </div>
                  <div class="modal-body">
                    
                      <div class="row">
                        <div class="col-sm-12">
                          <h4 class="info-text"></h4>
                        </div>
                        <div class="col-sm-3">
                        </div>

                      <form method="post">
                        <div class="col-sm-8">
                          <div class="form-group">
                            <label for="inputUsername" class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" id="inputUsername" required="">
                          </div>
                          <div class="form-group">
                            <label for="inputPassword" class="bmd-label-floating">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="inputPassword" required="">
                          </div>
                        </div>

                        <div class="col-sm-1">
                        </div>
                      </div>
                    
                      <div class="modal-footer justify-content-center">
                        <button class="btn btn-info btn-block" name='login'type="submit">Log In</button>
                        <br><br><br><br>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
 <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('app/views/assets/img/police.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class='text-center'>
          <img class="img" src="app/views/assets/img/logo-ulet.png" style="width:200px;">
          <div class="brand">
            <h1 font-family:"Times New Roman">BANTAY-E</h1>
            <h3 class="title">Security Management System</h3>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by Team Bantay.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="app/views/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="app/views/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="app/views/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="app/views/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="app/views/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="app/views/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="app/views/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="app/views/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="app/views/assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Small Gallery in Product Page -->
  <script src="app/views/assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="app/views/assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="app/views/assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="app/views/assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="app/views/assets/js/material-kit.js?v=2.1.1" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });
  </script>

  <script>
        window.onload = function() {
          history.replaceState("", "", window.location.href);
        }
</script>
</body>

</html>