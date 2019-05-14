     <?php 
include_once('header.php');
include_once('accountsall_nav.php');
?>

     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">All Accounts</h4>
                <button class="btn btn-primary float-right"  data-toggle="modal" data-target="#add-account-modal">Add Account</button>
               <span style="float: right;">
                 <div class="input-group no-border">
                     
                   <div class="col-md-6" style="float: right;">
                     
                    </div>
                </div>
              </span>
              </div>

               <div class="card-body">
                   <div class="">
                      <table class="table" id="table-accounts">
                        <thead class=" text-primary" style="text-align: center;">
                          <th>
                            Fullname
                          </th>
                          <th>
                            User Role
                          </th>
                          <th><center>
                            Actions
                          </center>
                          </th>
                        </thead>
                        <tbody>
                        <?php
                          foreach( getAccounts()as $row ){
                            $username = $row['username'];
                            $fullname = $row['fullname'];
                            $id = $row['school_id'];
                            $email= $row['university_email'];
                            $contact = $row['contact_no'];
                            $profile_pic = $row['profile_pic'];
                            $role = $row['role_desc'];
                            echo'
                            <tr style="text-align: center;">
                            <td>
                            '.$fullname.'
                            </td>
                          
                            <td>
                              '.$role.'
                            </td>
                           <td class="text-right">  <center>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit" data-toggle="modal" data-target="#exampleModal'.$id.'"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger  btn-just-icon remove" data-toggle="modal" data-target="#ModalDelete'.$id.'"><i class="material-icons">close</i></a>
                          </center> </td>
                          </tr>


                          
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
                                      <button type="button" class="btn btn-primary float-right" data-dismiss="modal"> No <i class="fa fa-refresh"></i></button>
                                      <button type="submit" class="btn btn-danger float-right" name="delete_account" ><i class="fa fa-check"></i> Yes</button>
                                  </div>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>




                  

<div class="modal fade bd-example-modal-lg"data-backdrop="static" data-keyboard="false" id="exampleModal'.$id.'" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog ">
  <div class="modal-content">
  <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Account</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    
    <div class="modal-body">
    <form role="form" method="POST" id="add-form" name="add-form" >
    <div class="card">
    <div class="card-header card-header-icon card-header-info">
      <div class="card-icon">
        <i class="material-icons">perm_identity</i>
      </div>
      <h4 class="card-title">Edit Profile -
        <small class="category">Complete your profile</small>
      </h4>
    </div>
    <div class="card-body">
    <div class="card-avatar">
      <div class="row">
      <form>
        <div class="col-sm-3">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
  <div class="fileinput-new thumbnail img-raised">
      <img src="data:image/jpeg;base64,'.$profile_pic.'" alt="...">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
  <div>
      <span class="btn btn-raised btn-round btn-default btn-file">
          <span class="fileinput-new">Select image</span>
          <span class="fileinput-exists">Change</span>
          <input type="file" name="..." />
      </span>
      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
  </div>

                <div class="form-group input-group">
                        <select class="form-control selectpicker"data-dropup-auto="false" data-style="btn btn-link" id="role" name="role">
                          <option >Select Role</option>
                          <option value="0">Admin</option>
                          <option value="1">Responder</option>
                        </select>         
                      </div>
</div>
<!-- end rpw -->
        </div>
      </div>
    </div>
     
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label class="bmd-label-floating">Username</label>
              <input type="text" name="username" class="form-control" value="'.$username.'">
            </div>
          </div>
          
          <div class="col-md-4">
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Fullname</label>
              <input type="text" name="fullname"class="form-control" value="'.$fullname.'">
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Contact no.</label>
              <input type="text" name="contact"class="form-control"value="'.$contact.'">
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-8">
            <div class="form-group">
              <label class="bmd-label-floating">Email address</label>
              <input type="email" name="email" class="form-control" value="'.$email.'">
            </div>
          </div>
        </div>

        <div class="row">
        <input type="hidden" name="update_id" value="'.$id.'">
        </div>
        
        <button type="submit" class="btn btn-info pull-right" id="update_account" name="update_account">Save</button>
        <button type="button" class="btn btn-secondary float-right btn-cancel" data-dismiss="modal"aria-label="Close" >
        <i class="fa "></i> Cancel</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>
</div>

         
           
        </div>
                   
       </div><!-- end form-body-->

      </form>
    </div><!-- end modal-body-->


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
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
  <!-- datables for our table -->
  <script src="app/js/datatables.js"></script>

  
                  

<div class="modal fade bd-example-modal-lg"data-backdrop="static"  id="add-account-modal" id role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
      <h5 class="modal-title" id="add-account-modal">Add Account</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    
      <div class="modal-body">
      <form role="form" method="POST" id="add-form" name="add-form" >
      <div class="card">
      <div class="card-header card-header-icon card-header-info">
        <div class="card-icon">
          <i class="material-icons">perm_identity</i>
        </div>
        <h4 class="card-title">Add Profile -
          <small class="category">Complete your profile</small>
        </h4>
      </div>
      <div class="card-body">
      <div class="card-avatar">
        <div class="row">
        <form>
          <div class="col-sm-3">
          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div class="fileinput-new thumbnail img-raised">
        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
    <div>
        <span class="btn btn-raised btn-round btn-default btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" name="profile_pic" id="profile_pic"/>
        </span>
        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
    </div>                          
</div>
<!-- end rpw -->

          </div>
          
    <div class="col-lg-10">
    <div class="form-group input-group">
                          <select class="form-control selectpicker"data-dropup-auto="false" data-style="btn btn-link" id="role" name="role">
                            <option >Select Role</option>
                            <option value="0">Admin</option>
                            <option value="1">Responder</option>
                          </select>         
                        </div>
 
    <div class="form-group input-group">
                          <select class="form-control selectpicker"data-dropup-auto="false" data-style="btn btn-link" id="gender" name="gender">
                            <option >Select Gender</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                          </select>         
                        </div>
    </div>
        </div>
      </div>
       

       
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="bmd-label-floating">Username</label>
                <input type="text" name="username" class="form-control" value="">
               
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">School ID</label>
                <input type="text" name="school_id"class="form-control" value="">
              </div>
            </div>
            
            <div class="col-md-4">
            <div class="form-group">
            <label class="bmd-label-floating">Password</label>
                <input type="text" name="password" class="form-control" value="">
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Fullname</label>
                <input type="text" name="fullname"class="form-control" value="">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Contact no.</label>
                <input type="text" name="contact"class="form-control"value="">
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-8">
              <div class="form-group">
                <label class="bmd-label-floating">Email address</label>
                <input type="email" name="email" class="form-control" value="">
              </div>
            </div>
          </div>


          
          <button type="submit" class="btn btn-info pull-right" id="add_account" name="add_account">Save</button>
          <button type="button" class="btn btn-secondary float-right btn-cancel" data-dismiss="modal"aria-label="Close" >
          <i class="fa "></i> Cancel</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
          </div>       
         </div><!-- end form-body-->
        </form>
      </div><!-- end modal-body-->
  </div>
</div>
</div>
  <?php
  include_once('footer.php');
  ?>
  
