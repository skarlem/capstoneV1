

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

</script>

</body>


<?php
include_once('footer.php');
?>