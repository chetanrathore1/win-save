
 <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Basic</h1>
                    <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
          <div class="row">
            <!-- order-card start -->
            <div class="col-sm-12">
              <h4 class="page-title">User's List</h4>
              <div class="card tabs-card">
                <div class="card-block p-0">
                  <!-- Tab panes -->
                  <div class="tab-content card-block">
                    <div class="tab-pane active" id="home3" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table table-hover" id="example">
                          <thead>
                            <tr class="text-uppercase">
                              <th>S.no</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>E-mail</th>
                              <th>Address</th>
                              <th>Contact</th>
                              <th>City</th>
                              <th>Create On</th>
                              <th>Status</th>
                             

                              <th>View More</th>
                               <th>Update</th>
                                <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1;foreach ($all_user_list as $key) {?>
                            <tr>
                              <td>
                                <?php echo $i; ?>
                              </td>
                              <td>
                                <img style="width: 100%;height:100px;border-radius: 7px;object-fit:contain;" src="<?php echo base_url();  ?>upload/image/<?php echo $key->profile_pic;  ?>">
                              </td>
                              <td>
                                <?php echo $key->name; ?></td>
                              <td>
                                <?php echo $key->email; ?></td>
                              <td>
                                <?php echo $key->address; ?></td>
                              <td>
                                <?php echo $key->contact; ?></td>
                              <td>
                                <?php echo $key->location; ?></td>
                              <td>
                                <?php echo date( "d/M/Y", strtotime($key->added_date) ); ?></td>
                              <td>
                                <form action="<?php echo base_url(); ?>backend/Login/status_update" method="POST">
                                  <input type="hidden" name="id" value="<?php echo $key->id; ?>">
                                  <input type="hidden" name="path" value="all-users">
                                  <input type="hidden" name="status" value="<?php if ($key->status==1) { echo " 0 ";}else{ echo "1 ";}
                ?>" ">
                <input type="submit" name=" " class="btn btn-<?php if ($key->status==1) { echo "success";}else{ echo "danger";} ?>" value="
                                  <?php if ($key->status==1) { echo "Apporved";}else{ echo "Disapporved";} ?>"></form>
                              </td>
                              <td><a class='btn btn-info' href="#myModal" id="<?php echo $key->id;  ?>" data-toggle="modal" class="view_user"><span class="ti-eye"></span>view</a>
                              </td>
                               <td>

                           <a href="<?php echo base_url() . "update-user/" . $key->id; ?>" class='btn btn-success'><i class='fa fa-pencil' aria-hidden='true'></i>&nbspUpdate</a>

                          </td>
                          <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="<?php echo base_url(); ?>user_delete/<?php echo $key->id; ?>">Delete</a></td>
                            </tr>
                            <?php $i++;} ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- tabs card end -->
          </div>
        </div>
      </div>
   
<script>
  $(document).ready(function(){  
        $('.view_user').click(function(){
          
             var user_id = $(this).attr("id"); 
             
             $.ajax({  
                  url:"<?php echo base_url(); ?>backend/Login/user_view",  
                  method:"post",  
                  data:{user_id:user_id},  
                  success:function(resonse){
                       var returnedData = JSON.parse(resonse);  
                       $('.name').html(returnedData.name);  
                       if(returnedData.profile_pic!==""){
                       $('.profile_pic').html('<img class="img-radius" src="<?php echo base_url(); ?>upload/image/' + returnedData.profile_pic + '"" >');
                     }else{
                        $('.profile_pic').html('<img class="img-radius" src="<?php echo base_url(); ?>upload/no_image.png "" >');
                      
                  }  
                     }
             });  
        });  
   });
</script>