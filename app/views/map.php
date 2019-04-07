

<?php
include_once('header.php');
include_once('map_nav.php');

?>
<body>
	
  <div id="map" width:900px;></div>
  





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