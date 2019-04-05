

<?php
include_once('header.php');
include_once('map_nav.php');
?>
<body>
	
  <div id="map" width:900px;></div>
  

<div class="modal fade bd-example-modal-lg" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
     
            <!--      Wizard container        -->
            <div class="wizard-container">
              <div class="card card-wizard" data-color="rose" id="wizardProfile">
                <form action="" method="">
                  <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                  <div class="card-header text-center">
                    <h3 class="card-title">
                      Build Your Profile
                    </h3>
                    <h5 class="card-description">This information will let us know more about you.</h5>
                  </div>
                  <div class="wizard-navigation">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                          About
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                          Account
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                          Address
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="about">
                        <h5 class="info-text"> Let's start with the basic information (with validation)</h5>
                        <div class="row justify-content-center">
                          <div class="col-sm-4">
                            <div class="picture-container">
                              <div class="picture">
                                <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                <input type="file" id="wizard-picture">
                              </div>
                              <h6 class="description">Choose Picture</h6>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">face</i>
                                </span>
                              </div>
                              <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating">First Name (required)</label>
                                <input type="text" class="form-control" id="exampleInput1" name="firstname" required>
                              </div>
                            </div>
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">record_voice_over</i>
                                </span>
                              </div>
                              <div class="form-group">
                                <label for="exampleInput11" class="bmd-label-floating">Second Name</label>
                                <input type="text" class="form-control" id="exampleInput11" name="lastname" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-10 mt-3">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">email</i>
                                </span>
                              </div>
                              <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating">Email (required)</label>
                                <input type="email" class="form-control" id="exampleemalil" name="email" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="account">
                        <h5 class="info-text"> What are you doing? (checkboxes) </h5>
                        <div class="row justify-content-center">
                          <div class="col-lg-10">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-checkbox">
                                  <input type="checkbox" name="jobb" value="Design">
                                  <div class="icon">
                                    <i class="fa fa-pencil"></i>
                                  </div>
                                  <h6>Design</h6>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-checkbox">
                                  <input type="checkbox" name="jobb" value="Code">
                                  <div class="icon">
                                    <i class="fa fa-terminal"></i>
                                  </div>
                                  <h6>Code</h6>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-checkbox">
                                  <input type="checkbox" name="jobb" value="Develop">
                                  <div class="icon">
                                    <i class="fa fa-laptop"></i>
                                  </div>
                                  <h6>Develop</h6>
                                </div>
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                                  <option disabled selected>Choose city</option>
                                  <option value="2">Foobar</option>
                                  <option value="3">Is great</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="address">
                        <div class="row justify-content-center">
                          <div class="col-sm-12">
                            <h5 class="info-text"> Are you living in a nice area? </h5>
                          </div>
                          <div class="col-sm-7">
                            <div class="form-group">
                              <label>Street Name</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label>Street No.</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label>City</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group select-wizard">
                              <label>Country</label>
                              <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                                <option value="Afghanistan"> Afghanistan </option>
                                <option value="Albania"> Albania </option>
                                <option value="Algeria"> Algeria </option>
                                <option value="American Samoa"> American Samoa </option>
                                <option value="Andorra"> Andorra </option>
                                <option value="Angola"> Angola </option>
                                <option value="Anguilla"> Anguilla </option>
                                <option value="Antarctica"> Antarctica </option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="mr-auto">
                      <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
                    </div>
                    <div class="ml-auto">
                      <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
                      <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- wizard container -->
         
  </div>
</div>
    </div>
</div>




      <!-- Modal insert-->
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
         <div class="col-lg-12">


            <form role="form" method="POST">

              <input type="hidden" name="edit_id" value="'.$id.'">
              
                <div class="form-group input-group">
                
                  <input type="hidden" class="form-control" id="lat" name="lat" placeholder="Latitude" readonly>
                </div>
                
                <div class="form-group input-group">
                  <input type="hidden" class="form-control" id="lng" name="lng" placeholder="Longitude" readonly>
                </div>
                
 
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                  <input type="text" class="form-control datetimepicker-input" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date"/>

 
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
                  <input type="text" class="form-control" name="location"  required oninvalid="" placeholder="Location Description" >
                </div>

                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
                  <input type="text" class="form-control" name="item" required oninvalid="" placeholder="Item/Unit" >
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">assignment_ind</i></span>
                  <input type="text" class="form-control" id="victim" required oninvalid="" name="victim" placeholder="Victim">
                </div>
                

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">directions_run</i></span>
                  <input type="text" class="form-control" id="suspect" required oninvalid="" name="suspect" placeholder="Suspect">
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">subject</i></span>
                  <input type="text" class="form-control" id="incident_nar"  required oninvalid="" name="incident_narrative" placeholder="Incident Narrative">
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">location_on</i></span>
                  <input type="text" class="form-control" id="action_taken" required oninvalid="" name="action_taken" placeholder="Action Taken">
                </div> 

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">person_in</i></span>
                  <input type="text" class="form-control" id="persons_involved"  required oninvalid="" name="persons_involved" placeholder="Persons Involved">
                </div>    

                 <div class="form-group input-group">
                  <span class="input-group-addon"><i class="material-icons">person_pin</i></span>
                  <input type="text" class="form-control" id="reported_by"required  oninvalid=""  name="reported_by" placeholder="Reported By(Required)">
                </div>
      

              <div class="form-group input-group">
                 
                  <label for="exampleFormControlSelect1">Classification</label>
                  <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="classification" name="classification">
                    <option >Incident Classification</option>
                    <option value='1'>Felony</option>
                    <option value='2'>Misdemeanor</option>
                    <option value='3'>Violation</option>
                   
                  </select>               
              </div>

              <div class="form-group input-group">
                 
                 <label for="exampleFormControlSelect1">Class</label>
                 <select class="form-control selectpicker"  required oninvalid="" data-style="btn btn-link" id="class" name="class">
                   <option >Class Type</option>
                   <option value='1'>Emerygency</option>
                   <option value='2'>Non-Emergency</option>
                 </select>               
             </div>


             <div class="form-group input-group">
                 
                 <label for="exampleFormControlSelect1">Category</label>
                 <select class="form-control selectpicker"  required oninvalid="" data-style="btn btn-link" id="category" name="category">
                   <option >Category</option>
                   <option value='1'>Theft</option>
                   <option value='2'>Armed Robbery</option>
                   <option value='3'>Vehicular Incident</option>
                   <option value='4'>Animal Bite</option>
                   <option value='5'>Assault</option>
                   <option value='6'>Fire</option>
                 </select>               
             </div>


             
                 <div class="modal-footer">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary" name="add_marker" >
                            <i class="fa "></i> Save to database</button>
                        </div>
                       
                    </div>

                  </form>
                </div>
               
            </div>
      </div>
     
    </div>
  </div>
</div>
    </div>
  </div>


<!-- modal for remove marker -->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


<!--Modal for displaying picture-->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<style type="text/css">
  #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

</style>



<!-- map-->
<script type="text/javascript" src="app/js/map.js" onload="initMap()"></script>
<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>


<script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>
</body>


<?php
include_once('footer.php');
?>