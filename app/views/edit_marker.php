<?php
  include_once('header.php');
  include_once('edit_marker_nav.php');
  ?>
<?php

if(isset($_POST['edit_marker'])){
  $_SESSION['marker_id']=$_POST['marker_id'];
  $_SESSION['lat']=$_POST['lat'];
  $_SESSION['lng']=$_POST['lng'];
  $_SESSION['date']=$_POST['date'];
  $_SESSION['location']=$_POST['location'];
  $_SESSION['category']=$_POST['category'];
  $_SESSION['class']=$_POST['class'];
  $_SESSION['narrative']=$_POST['narrative'];
  $_SESSION['action_taken']=$_POST['action_taken'];
  $_SESSION['incident_status']=$_POST['incident_status'];
  $_SESSION['reported_by']=$_POST['reported_by'];
  $_SESSION['narrative_id']=$_POST['narrative_id'];
  $_SESSION['recommendation']=$_POST['recommendation'];
  $_SESSION['edit_marker']=$_POST['edit_marker'];
  unset($_SESSION['add_marker']);
}

if(isset($_POST['add_form'])){
$_SESSION['marker_id']=$_POST['marker_id'];
$_SESSION['lat']=$_POST['lat'];
$_SESSION['lng']=$_POST['lng'];
$_SESSION['date']=$_POST['date'];
$_SESSION['location']=$_POST['location'];
$_SESSION['category']=$_POST['category'];
$_SESSION['class']=$_POST['class'];
$_SESSION['narrative']=$_POST['narrative'];
$_SESSION['action_taken']=$_POST['action_taken'];
$_SESSION['incident_status']=$_POST['incident_status'];
$_SESSION['reported_by']=$_POST['reported_by'];
$_SESSION['recommendation']=$_POST['recommendation'];
$_SESSION['add_marker']=$_POST['add_marker'];
unset($_SESSION['edit_marker']);
}
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">



    <?php
    
if(isset($_SESSION['add_marker'])){  
  $marker_id= $_SESSION['marker_id'];
  $lat=$_SESSION['lat'];
  $lng= $_SESSION['lng'];
  $date=$_SESSION['date'];
  $location=$_SESSION['location'];
  $category=$_SESSION['category'];
  $class=$_SESSION['class'];
  $narrative=$_SESSION['narrative'];
  $action_taken=$_SESSION['action_taken'];
  $incident_status=$_SESSION['incident_status'];
  $reported_by=$_SESSION['reported_by'];
  $recommendation=$_SESSION['recommendation'];
  unset($_SESSION['edit_marker']);
  echo'

<div class="col-md-12">
  <div class="card" >
    <div class="card-header card-header-info card-header-text">
      <div class="card-text">
        <h4 class="card-title">Incident Details</h4>
        <span class="badge badge-neutral">Add Marker: '.$_SESSION['marker_id'].'</span>

      </div>
    </div>
    <div class="card-body " style="padding:75px;">

    <form role="form" id="add-form" method="POST">

    <input type="hidden" name="marker_id" value="'.$marker_id.'">
    <input type="hidden" name="lat" value="'.$lat.'"id="lat"readonly>
    <input type="hidden" name="lng" value="'.$lng.'"id="lng" readonly>

    <div class="row">
      <label class="col-sm-1 col-form-label">Marker ID</label>
      <div class="col-sm-10">
        <div class="form-group">
          <input type="text" class="form-control" value="'.$marker_id.'" disabled>
        </div>
      </div>
    </div>
    <!-- end first row -->
  



    <div class="row"> 
      <div class="btn-group col-sm-4">
      <label class="col-sm-3 col-form-label">Class</label>
        <div class="form-group input-group">
        <input type="text" class="form-control" id="class" name="class"value="'.$class.'"  disabled>

        </div>
      </div>
  </div> 



                  
<div class="row">
  <div class="btn-group col-sm-4">
  <label class="col-sm-3 col-form-label">Category</label>
    <div class="form-group input-group">
    <input type="text" class="form-control" id="category" name="category"value="'.$category.'"  id="category" name="category" disabled>
       
      </div>
    </div>
  </div>


  <div class="row">
  <div class="btn-group col-sm-4">
  <label class="col-sm-3 col-form-label">Date</label>
    <div class="input-group form-control-lg">
        <div class="form-group bmd-form-group is-filled">
           
            <input type="text" class="form-control datetimepicker-input" value="'.$date.'" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date"/>
           
        </div>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="btn-group col-sm-4">
  <label class="col-sm-3 col-form-label">Reported by</label>
    <div class="input-group form-control-lg">
    <div class="form-group">
         
          <input type="text" id="reported_by" name="reported_by" value="'.$reported_by.'"placeholder="ID Number" class="form-control">
        </div>
      </div>
    </div>
  </div>



  <div class="row">
      <label class="col-sm-1 col-form-label">Location Description</label>
      <div class="col-sm-10">
        <div class="form-group">
        <textarea class="form-control" id="location"name="location" rows="3">'.$location.'</textarea>
        </div>
      </div>
    </div>

  <div style="align-content: center; padding-left:350px;">
      <div class="row" >
        <div class="card col-sm-9" style="padding-right:- 50px;">
          Click on Map to put a Marker
          <div id="map"style="height: 600px; width: 900px; "></div>
        </div>
      </div>
  </div>
 
 

  <div class="row">
      <label class="col-sm-1 col-form-label">Incident Narrative</label>
      <div class="col-sm-10">
        <div class="form-group">
        <textarea class="form-control" id="narrative"  name="narrative" rows="3">'.$narrative.'</textarea>
        </div>
      </div>
    </div>

    
  <div class="row">
      <label class="col-sm-1 col-form-label">Action Taken</label>
      <div class="col-sm-10">
        <div class="form-group">
        <textarea class="form-control" id="action_taken" name="action_taken" rows="3">'.$action_taken.'</textarea>
        </div>
      </div>
    </div>
    <div class="row">
    <label class="col-sm-1 col-form-label">Recommendation</label>
    <div class="col-sm-10">
      <div class="form-group">
      <textarea class="form-control" id="recommendation" name="recommendation" rows="3">'.$recommendation.'</textarea>
      </div>
    </div>
  </div>

                        

    <div class="form-group input-group">
    <input type="hidden" value="'.$incident_status.'" id="incident_status" name="incident_status"readonly/>

   
</div>
  
 
    <div class="row">
     
      <div class="col-sm-10">
        <div class="form-group">
        <input type="hidden">
        </div>
      </div>
    </div> 
    <input type="hidden" class="form-control" id="add_id" name="add_id" value="'. $_SESSION['marker_id'].'" readonly>
     
    <div class="col-md-4 ml-auto mr-auto text-center">
    <button type="button" class="btn btn-secondary btn-cancel">
   Cancel
  </button>
    <button type="submit" name="add-form"class="btn btn-info">
      Save
    </button>
   </div>    
</form>


<!-- END PHP HERE -->
  </div>
</div>
</div>
</div>

</div>

<script type="text/javascript" src="app/js/add_marker.js" onload="initMap()"charset="UTF-8"></script>
       
     
  ';
} 
    ?>        
<div class="col-md-12">
    <div class="card ">
    <div class="card-header card-header-info card-header-text">
        <div class="card-text">
          <h4 class="card-title">Items Involved</h4>
         
        </div> 
        <br>
        <button class="btn btn-info float-right"  data-toggle="modal" data-target="#add-item-modal">Add Item</button>
      </div>
      <div class="card-body " style="padding:50px;">

      <div class="dataTable_wrapper">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered nowrap" id="dataTables-items" style="width:100%">
                        <thead class=" text-primary">

                          <th>Item ID</th>
                          <th>Item Name</th>
                          <th>Description</th>
                          <th>Quantity</th>
                          <th>Estimated Worth</th>
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                          
                        <?php
                         $action =  "index.php?".md5("controller")."=".md5("edit_marker");
                        foreach( getItems()as $row ){

                        if($row['marker_id']===$_SESSION['marker_id']){
                              $item_id = $row['item_id'];
                              $id=$row['marker_id'];
                              $item_name=$row['item_name'];
                              $item_desc=$row['item_description'];
                              $quantity=$row['quantity'];
                              $est_worth=$row['est_worth'];
                                
                              
                          echo'
                          <tr>
                              
                              <td>'.$item_id.'</td>
                              <td>'.$item_name.'</td>
                              <td>'.$item_desc.'</td>
                              <td>'.$quantity.'</td>
                              <td>'.$est_worth.'</td>
                              <td style="width:100px;text-align:center">
                              <a class="btn btn-link btn-warning btn-just-icon edit" style="cursor:pointer" data-toggle="modal" data-target="#Edititem'.$item_id.'" title="Edit"><i class="fa fa-edit"></i></a>
                               
                              <a class="btn btn-link btn-danger btn-just-icon edit" style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$item_id.'" title="Delete"><i class="material-icons">
                              clear
                              </i></a>  
                              </td>
                          </tr>
                                  
                          <script>console.log("asda");</script>

                          
                          <div class="modal fade" id="ModalDelete'.$item_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                            <input type="hidden" name="delete_id" value="'.$item_id.'">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <div class="col-lg-12">
                                          <button type="button" class="btn btn-secondary float-right" data-dismiss="modal"> No </button>
                                          <button type="submit" class="btn btn-info  float-right" name="delete_item" > Yes</button>
                                      </div>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>

                       
                      <div class="modal fade" id="Edititem'.$item_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Edit Record</h4>
                              </div>
                              
                              <div class="modal-body">
                                  <div class="col-lg-12">
                                 
                                      <form role="form" method="POST">
                                       Edit this record: "'.$item_id.'"
                                        <input type="hidden" name="edit_item_id" value="'.$item_id.'">
                                        <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Item Name" required oninvalid="" value="'.$item_name.'" name="item_name"/>
                                        </div>
                                        <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Description" required oninvalid="" value="'.$item_desc.'" name="item_desc"/>
                                        </div>
                                        <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Quantity" required oninvalid="" value="'.$quantity.'" name="quantity"/>
                                        </div>
                                        <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Estimated Worth" required oninvalid="" value="'.$est_worth.'" name="est_worth"/>
                                        </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="col-lg-12">
                                      <button type="button" class="btn btn-secondary float-right" data-dismiss="modal"> Cancel </button>
                                      <button type="submit" class="btn btn-info float-right " name="edit_item" >Submit</button>
                                  </div>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>
                          ';
                          }
                         
                        }
                        ?>  
                        </tbody>
                        
                      </table>
                    </div>
                    
                  </div>
<!-- end div table -->




 </div>
    </div>
  </div>


<div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-info card-header-text">
        <div class="card-text">
          <h4 class="card-title">Persons/Constituent Involved</h4>
         
        </div>
        <br>
        <button class="btn btn-info float-right"  data-toggle="modal" data-target="#add-person-modal">Add Person</button>
      </div>
      <div class="card-body " style="padding:50px;">
<div class="dataTable_wrapper">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered nowrap" id="dataTables-person" style="width:100%">
                        <thead class=" text-primary">

                          <th>Record ID</th>
                          <th>Involved name</th>
                          <th>Affiliation</th>
                          <th>Involvement</th>
                          
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                          
                        <?php
                         $action =  "index.php?".md5("controller")."=".md5("edit_marker");
                        foreach( getPersons()as $row ){

                        if($row['marker_id']===$_SESSION['marker_id']){
                              $person_id = $row['persons_involved_id'];
                              $id=$row['marker_id'];
                              $fullname=$row['fullname'];
                              $affiliation=$row['affiliation'];
                              $involvement=$row['involvement_description'];
                                $involvement_id=$row['involvement'];
                                
                              
                          echo'
                          <tr>
                              
                              <td>'.$person_id.'</td>
                              <td>'.$fullname.'</td>
                              <td>'.$affiliation.'</td>
                              <td>'.$involvement.'</td>
                              
                              <td style="width:100px;text-align:center">
                              <a class="btn btn-link btn-warning btn-just-icon edit" style="cursor:pointer" data-toggle="modal" data-target="#Editperson'.$person_id.'" title="Edit"><i class="fa fa-edit"></i></a>
                               
                              <a class="btn btn-link btn-danger btn-just-icon edit" style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$person_id.'" title="Delete"><i class="material-icons">
                              clear
                              </i></a>   
                              </td>
                          </tr>
                                  
                          <script>console.log("asda");</script>


                          <div class="modal fade" id="ModalDelete'.$person_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                            <input type="hidden" name="delete_id" value="'.$person_id.'">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <div class="col-lg-12">
                                      <button type="button" class="btn btn-secondary float-right" data-dismiss="modal"> No </button>
                                          
                                      <button type="submit" class="btn btn-info float-right" name="delete_person" > Yes</button>
                                         
                                      </div>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>






                      
                      
                      <div class="modal fade" id="Editperson'.$person_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Edit Record</h4>
                              </div>
                              
                              <div class="modal-body">
                                  <div class="col-lg-12">
                                 
                                      <form role="form" method="POST">
                                       Edit this record: "'.$person_id.'"
                                        <input type="hidden" name="edit_person_id" value="'.$person_id.'">
                                        <input type="hidden" name="marker_id" value="'.$id.'">
            
                                       
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Fullname" required oninvalid="" value="'.$fullname.'" name="fullname"/>
                                            </div>

                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Affiliation"required oninvalid="" value="'.$affiliation.'" name="affiliation"/>
                                            </div>
                                            


                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="col-lg-12">
                                  <button type="button" class="btn btn-secondary float-right" data-dismiss="modal"> Cancel </button>
                                  <button type="submit" class="btn btn-info float-right " name="edit_person" >Submit</button>
                                  </div>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>
                          ';
                          }
                         
                        }
                        ?>  
                        </tbody>
                        
                      </table>
                    </div>
                    
                  </div>


</div>
</div>
</div>

<?php
if(isset($_SESSION['edit_marker'])){  
    $marker_id= $_SESSION['marker_id'];
    $lat=$_SESSION['lat'];
    $lng= $_SESSION['lng'];
    $date=$_SESSION['date'];
    $location=$_SESSION['location'];
    $category=$_SESSION['category'];
    $class=$_SESSION['class'];
    $narrative=$_SESSION['narrative'];
    $narrative_id=$_SESSION['narrative_id'];
    $action_taken=$_SESSION['action_taken'];
    $incident_status=$_SESSION['incident_status'];
    $reported_by=$_SESSION['reported_by'];
    $recommendation=$_SESSION['recommendation'];
    unset($_SESSION['add_marker']);
    
    echo'

<div class="col-md-12">
    <div class="card" >
    <div class="card-header card-header-info card-header-text">
    <div class="card-text">
      <h4 class="card-title">Incident Details</h4>
          <span class="badge badge-neutral">Edit Marker: '.$_SESSION['marker_id'].'</span>

        </div>
      </div>
      <div class="card-body " style="padding:75px;">

      <form role="form" id="edit-form" method="POST">
      <image
      <input type="hidden" name="marker_id" value="123123123">
      <input type="hidden" name="lat" value="'.$lat.'"id="lat"readonly>
      <input type="hidden" name="lng" value="'.$lng.'"id="lng" readonly>

      <div class="row">
        <label class="col-sm-1 col-form-label">Marker ID</label>
        <div class="col-sm-10">
          <div class="form-group">
            <input type="text" class="form-control" value="'.$marker_id.'" disabled>
          </div>
        </div>
      </div>
      <!-- end first row -->
    





           


    <div class="row">
    <div class="btn-group col-sm-4">
    <label class="col-sm-3 col-form-label">Date</label>
      <div class="input-group form-control-lg">
          <div class="form-group bmd-form-group is-filled">
             
              <input type="text" class="form-control datetimepicker-input" value="'.$date.'" required oninvalid="" id="date"name="date" data-toggle="datetimepicker" data-target="#date"/>
             
          </div>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="btn-group col-sm-4">
    <label class="col-sm-3 col-form-label">Reported by</label>
      <div class="input-group form-control-lg">
      <div class="form-group">
           
            <input type="text" id="reported_by" name="reported_by" value="'.$reported_by.'"placeholder="ID Number" class="form-control">
          </div>
        </div>
      </div>
    </div>



    <div class="row">
        <label class="col-sm-1 col-form-label">Location Description</label>
        <div class="col-sm-10">
          <div class="form-group">
          <textarea class="form-control" id="location"name="location" rows="3">'.$location.'</textarea>
          </div>
        </div>
      </div>

    <div style="align-content: center; padding-left:350px;">
        <div class="row" >
          <div class="card col-sm-9" style="padding-right:- 50px;">
            Click on Map to put a Marker
            <div id="map"style="height: 600px; width: 900px; "></div>
          </div>
        </div>
    </div>
   
   

    <div class="row">
        <label class="col-sm-1 col-form-label">Incident Narrative</label>
        <div class="col-sm-10">
          <div class="form-group">
          <textarea class="form-control" id="narrative"  name="narrative" rows="3">'.$narrative.'</textarea>
          </div>
        </div>
      </div>

      
    <div class="row">
        <label class="col-sm-1 col-form-label">Action Taken</label>
        <div class="col-sm-10">
          <div class="form-group">
          <textarea class="form-control" id="action_taken" name="action_taken" rows="3">'.$action_taken.'</textarea>
          </div>
        </div>
      </div>
      <div class="row">
      <label class="col-sm-1 col-form-label">Recommendation</label>
      <div class="col-sm-10">
        <div class="form-group">
        <textarea class="form-control" id="recommendation" name="recommendation" rows="3">'.$recommendation.'</textarea>
        </div>
      </div>
    </div>

                          
 <div class="row">
 <div class="btn-group col-sm-4">
    <label class="col-sm-3 col-form-label">Incident Status</label>
      <div class="form-group input-group">
      <select class="form-control selectpicker"  data-dropup-auto="false" required oninvalid="" value="'.$incident_status.'"data-style="btn btn-link" id="incident_status" name="incident_status">
          <option >Select</option>
          <option value="1">Resolved</option>
          <option value="2">Unresolved</option>
          <option value="3">Under Investigation</option>
          <option value="4">Forwarded to OSA</option>
          <option value="5">Forwarded to PNP</option>
          <option value="6">Resolved in OSA</option>
          <option value="7">Settled</option>
          <option value="8">Settled in OSA</option>
          <option value="9">Investigated</option>
                 
        </div>
      </div>
 </div>
    
   
      <div class="row">
       
        <div class="col-sm-10">
          <div class="form-group">
          <input type="hidden">
          </div>
        </div>
      </div> 
      <input type="text" class="form-control" id="marker_id" name="marker_id" value="'. $marker_id.'" readonly>
       
      <input type="hidden" class="form-control" id="edit_id" name="edit_id" value="'. $_SESSION['narrative_id'].'" readonly>
       
      <div class="col-md-4 ml-auto mr-auto text-center">
      <button type="button" class="btn btn-secondary btn-cancel">
     Cancel
    </button>
      <button type="submit" name="edit_form"class="btn btn-info">
        Save
      </button>
     </div>    
  </form>


<!-- END PHP HERE -->
    </div>
</div>
</div>
</div>

</div>



<script type="text/javascript" src="app/js/add_marker.js" onload="initMap()"charset="UTF-8"></script>
       
    ';
} 
 


?>

<!-- end row -->

      </div>
    </div>
  </div>

  


  <!-- datables for our table -->
  <script src="app/js/datatables.js"></script>


  
            
      


<!-- add person modal asdasdsa-->

<div class="modal fade" id="add-person-modal" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">

        <form role="form" method="POST" id="add-person-form" name="add-person-form">
           <div class="form-group input-group">
                

           <input type="hidden" class="form-control" id="person_id" name="person_id" value="<?php echo $_SESSION['marker_id'];?>" readonly>
              </div>
            <div class="form-group input-group">

                <input type="hidden" class="form-control" id="add-person-form" name="add-person-form" readonly>
              </div>
            <div class="form-group input-group">
                
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname">
              </div>
              
              <div class="form-group input-group">
                <input type="text" class="form-control" id="affiliation" name="affiliation" placeholder="Affiliation" >
              </div>
              <div class="form-group input-group">
                      <label for="exampleFormControlSelect1">Involvement</label>
                      <select class="form-control selectpicker"   required oninvalid="" data-style="btn btn-link" id="involvement" name="involvement">
                        <option >Involvement</option>
                        <option value='1'>Victim</option>
                        <option value='2'>Suspect</option>
                        <option value='3'>Witness</option>
                        <option value='4'>Investigator</option>
                        <option value='5'>Roving Guards</option>
                        
                      </select>               
                  </div>
          <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-info float-right" id="add_person" name="add_person">
                <i class="fa "></i> Save person</button>
                </form>
               
                  <button type="button" class="btn btn-secondary float-right" data-dismiss="modal" aria-label="Close" >
                  <i class="fa "></i> Close</button>
                
            </div>
                       
           </div>
           <!-- end form-body -->

          
        </div>
        <!-- end modal-body -->


    </div>
  </div>
</div>





<!-- add person modal asdasdsa-->

<div class="modal fade" id="add-item-modal" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">

        <form role="form" method="POST" id="add-item-form" name="add-item-form">
           <div class="form-group input-group">
                

                     

           <input type="hidden" class="form-control" id="item_id" name="item_id" value="<?php echo $_SESSION['marker_id'];?>" readonly>
              </div>
              <div class="form-group input-group">
                
                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name">
              </div>
              
              <div class="form-group input-group">
                <input type="text" class="form-control" id="item_desc" name="item_desc" placeholder="Description" >
              </div>
              
              
              <div class="form-group input-group">
                <input type="text" class="form-control" id="item_quantity" name="item_quantity" placeholder="Quantity" >
              </div>

              <div class="form-group input-group">
                <input type="text" class="form-control" id="item_work" name="item_worth" placeholder="Estimated worth" >
              </div>
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-info float-right" id="add_item" name="add_item">
                <i class="fa "></i> Save item</button>
                </form>
               
                  <button type="button" class="btn btn-secondary float-right btn-cancel-item" aria-label="Close" >
                  <i class="fa "></i> Close</button>
                
            </div>
                       
           </div><!-- end form-body-->

          
        </div><!-- end modal-body-->


    </div>
  </div>
</div>






<script type="text/javascript" src="app/js/time.js" charset="UTF-8"></script>

<script>

$(function () {
    $('#person_involved_form').on('click',function (e) {
      $('#add-person-modal').modal('show');
   });
});


$(function () {
    $('#add-item-form').on('click',function (e) {
      //  e.preventDefault();
      $('#add-item-modal').modal('show');
      console.log('asdasdasd');
             
   });
});



  $(".btn-add").click(function(){
      Swal.fire({
        title: "Are you sure you want to save changes?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          ).then((result) => {
            $("#edit-form").submit();
            });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
    });

    $(".btn-add-person").click(function(){
      Swal.fire({
        title: "Are you sure you want to add changes to previous record?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          ).then((result) => {
            $("#add-person-form").submit();
           // alert('success');
            });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
    });



    $(".btn-add-item").click(function(){
      Swal.fire({
        title: "Are you sure you want to add changes to previous record?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          ).then((result) => {
            $("#add-item-form").submit();
          //  alert('success');
            });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
    });


    $(".btn-add-item").click(function(){
      Swal.fire({
        title: "Are you sure you want to add changes to previous record?",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Saved!',
            'Changes have been saved',
            'success'
          ).then((result) => {
            $("#add-item").submit();
            alert('success-item');
            });
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          })
        }
      });
    });



    
  $(".btn-cancel").click(function(){
      Swal.fire({
        title: "Are you sure you want to cancel? Changes will not be saved",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          }).then((result) => {
            $('#exampleModal').modal('hide');
            });;
          
         
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
         
        }
      });


    });


    
  $(".btn-cancel-item").click(function(){
      Swal.fire({
        title: "Are you sure you want to cancel? Changes will not be saved",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          }).then((result) => {
            $('#add-item').modal('hide');
            });;
          
         
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
         
        }
      });
    });

    $(".btn-cancel-person").click(function(){
      Swal.fire({
        title: "Are you sure you want to cancel? Changes will not be saved",
        type: "question",
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title: "Changes were not saved!",
            type: "info",
            
            confirmButtonText: 'Ok',
            
          }).then((result) => {
            $('#add-person-modal').modal('hide');
            });;
          
         
        } 
        else if (result.dismiss === Swal.DismissReason.cancel) {
         
        }
      });
    });
</script>
<?php
  include_once('footer.php');
  ?>