

<?php
include_once('header.php');
include_once('map_nav.php');
?>
<body>
	
	<div id="map"></div>
      <!-- Modal -->
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
                  <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude">
                </div>
                
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                  <input type="text" class="form-control" id="lng" name="lng" placeholder="Longitude">
                </div>
                <!--
                            <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                 
                                 <div class="dropdown" >
                                  <h5>Select Incident Type</h5>
                                   <select name="type">
                                    <option value="Theft">Theft</option>
                                    <option value="Vehicular Incident">Vehicular Incident</option>
                                    <option value="Fire">Fire</option>
                                    <option value="Physical Injuries">Physical Injuries</option>
                                    <option value="Animal Bite">Animal Bite</option>
                                    <option value="Sexual Harassment">Sexual Harassment</option>
                                  </select>
                                  </div>
                            </div>


-->

                  <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                 <input type="text" class="form-control" name="type" placeholder="Type" >
                             </div>

                              <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                 <input type="text" class="form-control" id="date" name="date" placeholder="Date" >
                             </div>
                              <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                <input type="text" class="form-control" name="location" placeholder="Location Description" >
                             </div>
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
<!-- map-->
<script type="text/javascript" src="app/js/map.js" onload="initMap()"></script>
	
</body>


<?php
include_once('footer.php');
?>