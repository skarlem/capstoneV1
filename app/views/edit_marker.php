<?php
  include_once('header.php');
  include_once('edit_marker_nav.php');
  ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
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
}

if(isset($_SESSION['marker_id'])){  
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

    echo'

<div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-text">
        <div class="card-text">
          <h4 class="card-title">Incident Details</h4>
          <span class="badge badge-primary">Edit Marker: '.$_SESSION['marker_id'].'</span>

        </div>
      </div>
      <div class="card-body ">

<form role="form" method="POST" id="edit-form" name="edit-form" >
<div class="form-group input-group">
      
      <input type="hidden" class="form-control" id="edit-form" name="edit-form" readonly>
    </div>
<div class="form-group input-group">
      
      <input type="text" class="form-control" id="lat" name="lat" value="'.$lat.'"placeholder="Latitude" readonly>
    </div>
    
    <div class="form-group input-group">
      <input type="text" class="form-control" id="lng" name="lng" value="'.$lng.'" placeholder="Longitude" readonly>
    </div>
   
    


<div class="container-fluid">
<div class="row">
  <div class="col">
  <h4>General Details</h4>     
  </div>
  <div class="col">
  <h4>Incident Narrative </h4>
      
  </div>
  <div class="col">
  <h4>Persons Involved </h4>     
  </div>
  <div class="col">
  <h4>Items Involved </h4>
  </div>
  
</div>

  <div class="row">
  
 
         
       
         
         
 
    <div class="col">
      
     <div class="form-group input-group">
        <span class="input-group-addon"><i class="material-icons">event_note</i></span>
        <input type="text" class="form-control datetimepicker-input" required oninvalid="" value="'.$date.'"name="date" data-toggle="datetimepicker" data-target="#date"/>
      </div>

  </div><!-- end col-md-4 -->

  <div class="col">
    <div class="form-group input-group">
      <i class="material-icons">phonelink </i>
        <input type="text" class="form-control"  placeholder="What Happened"required oninvalid="" value="'.$narrative.'"id="narrative"name="narrative"/>
      </div>
   
  </div>
  <div class="col">
  <button type="submit" id="person_involved_form"form="person_involved_form" class="btn btn-success"  data-toggle="tooltip" data-placement="top" >Add person</button>

  </div>
  <div class="col">
  <button type="submit" id="add-item-form" form="add-item-form" name="add-item-form" class="btn btn-success ">Add item</button>
   
  
  </div>
</div><!-- end row -->

<div class="row">
  <div class="col">
      <div class="form-group input-group">
          <span class="input-group-addon"><i class="material-icons">edit_location</i></span>
          <input type="text" class="form-control" name="location"  value="'.$location.'"required oninvalid="" placeholder="Location Description" >
      </div>
    </div>

    <div class="col">
    <div class="form-group input-group">
      <i class="material-icons">phonelink </i>
        <input type="text" class="form-control" value="'.$action_taken.'" placeholder="Action Taken"required oninvalid="" id="action_taken"name="action_taken"/>
      </div>
  
  </div>
  <div class="col">
    <div id="persons  ">

    </div>
  </div>
  <div class="col">
  
  </div>
      
</div><!-- end row -->

<div class="row">
  <div class="col">
  <div class="form-group input-group">
      <i class="material-icons">phonelink </i>
        <input type="text" class="form-control" value="'.$reported_by.'" placeholder="Reported by (ID NUMBER)"required oninvalid="" id="reported_by"name="reported_by"/>
      </div>
    </div>

                
    <div class="col">
    <div class="form-group input-group">
          
          <label for="exampleFormControlSelect1">Incident Status</label>
          <select class="form-control selectpicker"  value="'.$incident_status.'" required oninvalid="" data-style="btn btn-link" id="incident_status" name="incident_status">
            <option >Incident Status</option>
            <option value="1">Resolved</option>
            <option value="2">Unresolved</option>
            <option value="3">Under Investigation</option>
            <option value="4">Forwarded to OSA</option>
            <option value="5">Forwarded to PNP</option>
            <option value="6">Resolved in OSA</option>
            <option value="7">Settled</option>
            <option value="8">Settled in OSA</option>
            <option value="9">Investigated</option>
            
          </select>               
      </div>
      
    </div>

    <div class="col"> 
  
  </div>

  <div class="col">
   
      </div>
  </div><!-- end row -->


<div class="row">
<div class="col-md-3">
<div class="form-group input-group">
          <select class="form-control selectpicker" value="'.$class.'"data-style="btn btn-link" id="class" name="class">
            <option >Class</option>
            <option value="1">Emergency</option>
            <option value="2">Non-Emergency</option>
           
          </select>         

</div><br>
<div class="form-group input-group">
      <select class="form-control selectpicker "value="'.$category.'" data-style="btn btn-link" id="category" name="category">
            <option >Category</option>
            <option value="1">Disorder</option>
            <option value="2">Drugs</option>
            <option value="3">Death</option>
            <option value="4">Assault</option>
           
            <option value="5">Rape</option>
            <option value="6">Lasciviousness</option>
            <option value="7">Robbery</option>
            <option value="8">Theft</option>
            <option value="9">Breaking and Entering</option>
            <option value="10">Emergency (Disasters)</option>
            <option value="11">Fire</option>
            <option value="12">Vehicular Accidents</option>
            <option value="13">Animal Bite</option>
          </select>         
      </div>

</div>

     
</div>

<br>




  <div class="col">
</div>
<div class="col">
  </div>
  <div class="col">
  </div>
    

    </div>
</div>

<div class="row">
  
                
  
  <div class="col">
    
  
  
  </div>

  <div class="col">
  
  </div>
  <div class="col" id="olol">


  </div>
  <div class="col">
  </div>  
</div>






<div class="modal-footer">
  <div class="col-lg-12"> 
    <button type="button" class="btn btn-secondary float-left btn-cancel" aria-label="Close" >
      <i class="fa "></i> Cancel</button>
      <button type="button" class="btn btn-primary float-left btn-add" id="edit_marker"name="edit_marker" >
      <i class="fa "></i> Save to database</button>
   
     
  </div>
             
 </div><!-- end form-body-->

</form>


<!-- END PHP HERE -->
    </div>
</div>
</div>
</div>

</div>


       
    ';
} 



print_r($_SESSION);
?>
<div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-text">
        <div class="card-text">
          <h4 class="card-title">Items Involved</h4>
        </div>
      </div>
      <div class="card-body ">

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
                              <a style="cursor:pointer" data-toggle="modal" data-target="#Edit'.$item_id.'" title="Edit"><i class="fa fa-edit"></i></a>
                               
                              <a style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$item_id.'" title="Delete"><i class="material-icons">
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
                                          <button type="button" class="btn btn-primary" data-dismiss="modal"> No <i class="fa fa-refresh"></i></button>
                                          <button type="submit" class="btn btn-danger " name="delete_item" ><i class="fa fa-check"></i> Yes</button>
                                      </div>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>

                       
                      <div class="modal fade" id="Edit'.$item_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                      <button type="submit" class="btn btn-primary float-right " name="delete_item" >Submit</button>
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
      <div class="card-header card-header-rose card-header-text">
        <div class="card-text">
          <h4 class="card-title">Persons/Constituent Involved</h4>
        </div>
      </div>
      <div class="card-body ">
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
                             
                                
                              
                          echo'
                          <tr>
                              
                              <td>'.$person_id.'</td>
                              <td>'.$fullname.'</td>
                              <td>'.$affiliation.'</td>
                              <td>'.$involvement.'</td>
                              
                              <td style="width:100px;text-align:center">
                              <a style="cursor:pointer" data-toggle="modal" data-target="#Edit'.$person_id.'" title="Edit"><i class="fa fa-edit"></i></a>
                               
                              <a style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$person_id.'" title="Delete"><i class="material-icons">
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
                                          <button type="button" class="btn btn-primary" data-dismiss="modal"> No <i class="fa fa-refresh"></i></button>
                                          <button type="submit" class="btn btn-danger " name="delete_person" ><i class="fa fa-check"></i> Yes</button>
                                      </div>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>






                      
                      
                      <div class="modal fade" id="Edit'.$person_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                       
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Fullname" required oninvalid="" value="'.$fullname.'" name="fullname"/>
                                            </div>

                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="material-icons">event_note</i></span>
                                                <input type="text" class="form-control" placeholder="Affiliation"required oninvalid="" value="'.$affiliation.'" name="affiliation"/>
                                            </div>

                                            <div class="form-group input-group">
                                            <label for="exampleFormControlSelect1">Involvement</label>
                                            <select class="form-control selectpicker" value="'.$involvement.'"  required oninvalid="" data-style="btn btn-link" id="involvement" name="involvement">
                                              <option >Involvement</option>
                                              <option value="1">Victim</option>
                                              <option value="2">Suspect</option>
                                              <option value="3">Witness</option>
                                              <option value="4">Investigator</option>
                                              <option value="5">Roving Guards</option>
                                              
                                            </select>               
                                        </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="col-lg-12">
                                  <button type="button" class="btn btn-secondary float-right" data-dismiss="modal"> Cancel </button>
                                  <button type="submit" class="btn btn-primary float-right " name="edit_person" >Submit</button>
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
                <button type="button" class="btn btn-primary float-right btn-add-person" id="add_person" name="add_person">
                <i class="fa "></i> Save to database</button>
                </form>
                <form method="POST" id="cancel-all" name="cancel-all">
                  <button type="button" class="btn btn-secondary float-right btn-cancel-all" aria-label="Close" >
                  <i class="fa "></i> Close</button>
                </form>
            </div>
                       
           </div><!-- end form-body-->

          
        </div><!-- end modal-body-->


    </div>
  </div>
</div>




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
                
                <input type="hidden" class="form-control" id="add-item-form" name="add-item-form" readonly>
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





          <div class="form-group input-group">
                
                <input type="hidden" class="form-control" id="class" name="class" placeholder="Latitude" readonly value='1'>
              </div>
          <div class="modal-footer">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary float-right btn-item-form" id="add_item"name="add_item" >
                <i class="fa "></i> Save to database</button>
             
                <button type="button" class="btn btn-secondary float-right btn-cancel-person" aria-label="Close" >
                <i class="fa "></i> Close</button>
            </div>
                       
           </div><!-- end form-body-->

          </form>
        </div><!-- end modal-body-->


    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg"data-backdrop="static" data-keyboard="false" id="set-lat-lng" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg w-75 p-3">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
          <form role="form" method="POST" id="add-form-map" name="add-form-map" >
            <div id="map"></div>
          </form>
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
      $('#add-item-modal').modal('show');
      console.log('asdasdasd');
             
   });
});


$(function () {
    $('#map_modal').on('click',function (e) {
      $('#set-lat-lng').modal('show');
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
            $("#add-form").submit();
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

    $(".btn-item-form").click(function(){
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
            $('#add-item-modal').modal('hide');
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