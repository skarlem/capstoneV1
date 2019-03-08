

<?php
include_once('header.php');
include_once('map_nav.php');
?>
<body>
	
	<div id="map"></div>
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
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude" readonly>
                </div>
                
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="lng" name="lng" placeholder="Longitude" readonly>
                </div>
                
 
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control datetimepicker2" name="date" id="date" class="btn btn-secondary" 
              data-toggle="tooltip" data-placement="top" title="ex. 12/22/2017 as MM/DD/YYYY"/>
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" name="location" placeholder="Location Description" >
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="victim" name="victim" placeholder="Victim">
                </div>
                

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="suspect" name="suspect" placeholder="Suspect">
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="incident_nar" name="incident_nar" placeholder="Incident Narrative">
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="action_taken" name="action_taken" placeholder="Action Taken">
                </div> 

                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="persons_involved" name="persons_involved" placeholder="Persons Involved">
                </div>          

              <div class="form-group input-group">
                 
                  <label for="exampleFormControlSelect1">Example select</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="classification" name="classification">
                    <option >Incident Classification</option>
                    <option value='1'>Armed Robberies</option>
                    <option value='2'> </option>
                    <option value='3'></option>
                   
                  </select>               
              </div>

              <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="reported_by" name="reported_by" placeholder="Reported By(optional)">
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

</body>


<?php
include_once('footer.php');
?>