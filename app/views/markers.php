  <?php
  include_once('header.php');
  include_once('marker_nav.php');
  ?>

<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 1;  /* this affects the margin in the printer settings */
}
.text-wrap{
    white-space:normal;
}
.width-200{
    width:200px;
}

</style>


        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-info">
                    <h4 class="card-title ">Incident Records</h4>
                    <p class="card-category"> </p>

                  </div>

                

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
          <div id="map"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

                <div class="dataTable_wrapper" style="margin:20px;">
                    <div class="table-responsive">
                      <table class="table table-striped compact nowrap fixed" cellspacing="0"  id="dataTables-example" style="width:100%;">
                        <thead class=" text-primary">
                         
                          <th > 
                          </th>

                          <th>
                            Date Reported
                          </th>
                         
                          <th>
                            Location Description
                          </th>
                       
                          <th>
                            Category
                          </th> 
                          
                          <th>
                            Item/Unit
                          </th> 
                          
                          <th>
                           Victim
                          </th>
                          
                          <th>
                            Incident Narrative
                          </th>  
                        
                          <th>
                            Classification
                          </th>
                          
                          <th>
                           Action Taken
                          </th>
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                          
                        <?php
                         $action =  "index.php?".md5("controller")."=".md5("edit_marker");
                        foreach( getMarkers()as $row ){
                              $id = $row['marker_id'];
                              $lat = $row['lat'];
                              $lng = $row['lng'];
                              $date = $row['date'];
                              $location = $row['location_description'];
                              $category = $row['category_desc'];
                              $items = $row['items'];
                              $victim = $row['victim'];
                              $incident_narrative = $row['what_happened'];
                              $action_taken = $row['action_taken'];
                              $suspect = $row['suspect'];
                              $classification=$row['classification_desc'];
                              $school_id=$row['reported_by'];
                              
                              $status =$row['status_description'];
                              $status_id=$row['status_id'];
                              $category_id=$row['category'];
                              $class=$row['class'];
                              $narrative_id= $row['narrative_id'];
                              $recommendation= $row['recommendation'];

                          echo'
                          <tr>
                              
                              <td></td>
                              <td>'.date("M d, Y", strtotime($date)).'</td>
                             
                              <td>'.$location.'</td>
                              <td>'.$category.'</td>
                              <td>'.$items.'</td>
                              <td>'.$victim.'</td>
                              <td>'.$incident_narrative.'</td>
                             
                              <td>'.$classification.'</td>
                              <td>'.$action_taken.'</td>
                              <td style="width:100px;text-align:center">
                              <a class="btn btn-link btn-warning btn-just-icon edit" style="cursor:pointer" data-toggle="modal" data-target="#send'.$id.'" title="Edit"><i class="material-icons">edit</i></a>
                              <a class="btn btn-link btn-info btn-just-icon edit" style="cursor:pointer" data-toggle="modal" data-target="#viewModal'.$id.'" title="View Full Report"><i class="material-icons">zoom_out_map</i></a>
                                
                              </td>
                          </tr>

                          <div class="modal fade bd-example-modal-lg" id="viewModal'.$id.'" tabindex="-1" 
                          role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="false"  >
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                 
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div id="print">

                                  
                              <center>
                                  <h5>Incident Report Information</h5>
                                  <hr>
                                  </center>
                                  <div class="logo">
                                      
                                      <img src="assets/marker/F-Theft.png">
                                      
                                    </div>
                                
                                  
                                  <br>


                                  <div class="container">

                                  <div class="row">

                                    <div class="col">
                                      Incident ID: '.$id.'
                                    </div>
                                    <div class="col">
                                      Classification: '.$classification.'
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col">
                                      Category: '.$category.'
                                    </div>
                                    <div class="col">
                                      Status: '.$status.'
                                    </div>
                                   
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col">
                                    Items Involved: <br>'.$items.'
                                  </div>

                                
                                  </div><!-- row end -->
                                  <br>
                                <div class="row">
                                    <div class="col">
                                    Persons Involved <br>
                                    Victim: '.$victim.'<br>
                                    Suspect: '.$suspect.'
                                  </div>

                                
                                  </div><!-- row end -->

                                  
                            <br>
                                <div class="row">
                                    <div class="col">
                                    Incident Narrative: <br>'.$incident_narrative.'
                                  </div>

                                
                                  </div><!-- row end -->

                                  <br>
                                  <div class="row">
                                  <div class="col">
                                  Action Taken:<br> '.$action_taken.'
                                </div>
                                
                                  </div><!-- row end -->
                                  
                              
                                </div>
                                
                                  </div>
                                   
                            </div>
                            <div class="modal-footer">
                                  <div class="col-lg-12">
                                      <button type="submit" class="btn btn-info float-right" id="btnPrint" >Print</button>
                                      <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                                      
                                  </div>
                              </div>
                          </div>
                              </div>
                          </div>




                          

                  <div class="modal fade" id="send'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Edit Record</h4>
                          </div>
                          
                          <div class="modal-body">
                              <div class="col-lg-12">
                             
                                  <form role="form" id="edit_marker" action="'.$action.'"method="POST">
                                    Are you sure you want to edit this record?
                                    <input type="hidden" name="marker_id" value="'.$id.'">
                                    <input type="hidden" name="lat" value="'.$lat.'">
                                    <input type="hidden" name="lng" value="'.$lng.'">
                                    <input type="hidden" name="date" value="'.$date.'">
                                    <input type="hidden" name="location" value="'.$location.'">
                                    <input type="hidden" name="category" value="'.$category_id.'">
                                    <input type="hidden" name="class" value="'.$class.'">
                                    <input type="hidden" name="narrative" value="'.$incident_narrative.'">
                                    <input type="hidden" name="action_taken" value="'.$action_taken.'">
                                    <input type="hidden" name="incident_status" value="'.$status_id.'">
                                    <input type="hidden" name="reported_by" value="'.$school_id.'">
                                    <input type="hidden" name="narrative_id" value="'.$narrative_id.'">
                                    <input type="hidden" name="recommendation" value="'.$recommendation.'">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <div class="col-lg-12">
                              <button type="button" class="btn btn-primary float-right" data-dismiss="modal"> No <i class="fa fa-refresh"></i></button>
        
                                  <button type="submit" class="btn btn-danger float-right " name="edit_marker" ><i class="fa fa-check"></i> Yes</button>
     
                              </div>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>



                          
                          <div class="modal fade" id="ModalDelete'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                  <div class="modal-footer justify-content-between">
                                      <div class="col-lg-12">
                                          <button type="submit" class="btn btn-info float-right" name="delete_submit" > Yes</button>
                                          <button type="button" class="btn btn-default float-right" data-dismiss="modal">No</button>
                                         
                                      </div>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                                           
                      <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Modify Record</h4>
                              </div>
                              
                              <div class="modal-body">
                                  <div class="col-lg-12">
                                      <form role="form" method="POST">
                                          <input type="hidden" name="edit_id" value="'.$id.'">
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">location_on</i></span>
                                              <input type="text" class="form-control" name="lat" placeholder="Latitude" value="'.$lat.'" readonly>
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">location_on</i></span>
                                              <input type="text" class="form-control" name="lng" placeholder="Longitude" value="'.$lng.'" readonly>
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                              <input type="text" class="form-control" name="date" placeholder="Date" value="'.$date.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
                                              <input type="text" class="form-control" name="location" placeholder="Location" value="'.$location.'">
                                          </div>
                                          
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="victim" placeholder="Victim" value="'.$victim.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="suspect" placeholder="Suspect" value="'.$suspect.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="incident_narrative" placeholder="Incident Narrative" value="'.$incident_narrative.'">
                                          </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="action_taken" placeholder="Action Taken" value="'.$action_taken.'">
                                          </div>
                                          <div class="form-group input-group">
             
                                                   
                                      </div>
                                          <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                              <input type="text" class="form-control" name="reported_by" placeholder="Reported By " value="'.$school_id.'">
                                          </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="col-lg-12">
                                      <button type="submit" class="btn btn-info float-right" name="edit_submit" ></i> Update Records</button>
                                      <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                                      
                                  </div>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>



                                  
                          <script>console.log("asda");</script>
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

  <!-- datables for our table -->
  <script src="app/js/datatables.js"></script>


  <script>
  document.getElementById("btnPrint").onclick = function() {
    printElement(document.getElementById("print"));
    window.print();
}

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);

}
  </script>

  <?php
  include_once('footer.php');
  ?>