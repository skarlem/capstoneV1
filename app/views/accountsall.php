     <?php 
include_once('header.php');
include_once('accountsall_nav.php');
?>

     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">All Accounts</h4>
                
               <span style="float: right;">
                 <div class="input-group no-border">
                      <button type="submit" class="btn btn-link" style="width: 5px;">
                        <i class="material-icons" >search</i>
                      </button> <input type="text" value="" class="form-control" placeholder="Search..." style="height:45px"> 
                   <div class="col-md-6" style="float: right;">
                      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by:</button>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Client</a>
                      <a class="dropdown-item" href="#">Therapist</a>
                      <a class="dropdown-item" href="#">Support</a>
                       </div>
                    </div>
                </div>
              </span>
              </div>

               <div class="card-body">
                   <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary" style="text-align: center;">
                          <th>
                            Username
                          </th>
                          <th>
                            Fullname
                          </th>
                          <th><center>
                            Actions
                          </center>
                          </th>
                        </thead>
                        <tbody>
                          <tr style="text-align: center;">
                            <td>
                              user1
                            </td>
                            <td>
                              Jane Doe
                            </td>
                           <td class="text-right">  <center>
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">description</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </center> </td>
                          </tr>

                          
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