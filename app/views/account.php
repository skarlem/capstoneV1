<?php
include_once('header.php');
include_once('account_nav.php');
?>




      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Account</h4>
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

              <div class="dataTable_wrapper">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered nowrap" id="dataTables-example" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Password
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        
                      <?php
                       foreach( getAccount($_SESSION['id'])as $row ){
                            $id = $row['id'];
                            $username = $row['username'];
                            $password = $row['password'];

                            
                        echo'
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$username.'</td>
                            <td>'.$password.'</td>
                            <td style="width:100px;text-align:center">
                                <a style="cursor:pointer" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><i class="fa fa-edit"></i></a>
                                <a style="cursor:pointer" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><i class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                                
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
                                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                        <input type="text" class="form-control" name="lat" placeholder="Latitude" value="'.$username.'">
                                                    </div>

                                                    <div class="form-group input-group">
                                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                        <input type="text" class="form-control" name="lng" placeholder="Longitude" value="'.$password.'">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-lg-12">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="edit_submit" ></i> Update Records</button>
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
<script >
$(document).ready( function () {
    $('#dataTables-example').DataTable();
} );
</script>

<?php
include_once('footer.php');
?>