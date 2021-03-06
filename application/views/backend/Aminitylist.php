<style>
div#example_wrapper > .row:first-child {
    position: absolute;
    top: 73px!important;
    display: flex;
    width: 95%!important;
    flex-direction: row;
    margin: -2px;
}
</style>
 <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Aminity List</h1>
                    <ul>
                 
                        <li>List</li>
                    </ul>
                </div>
                 <div class="pull-right"> <a href="#aminity-section" class="btn btn-dark pull-right send_category" data-toggle="modal"><i class="fa fa-plus"></i> Add aminity</a>
                        </div>
                <div class="separator-breadcrumb border-top"></div>

          <div class="row">
            <!-- order-card start -->
            <div class="col-sm-12">
              <form class="form-horizontal" id="submit">
              <div class="card">
            
                <?php echo form_open_multipart( 'category_save');?>
                <div class="card-body">
                  <table class="table table-bordered table-hover" id="example">
                    <thead>
                    <tr class="text-uppercase">
                      <th>#id</th>
                       <th>Category Name</th>
                      <th>Aminity Name</th>
                      <th>Aminity Name Ar</th>
                      <th>Image</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; foreach ($get_aminity as $key) { ?>
                    <tr>
                      <td>
                        <?php echo $i; ?>
                      </td>
                      <td><?php  $data['get_category'] =$this->Modlogin->get_categorybyid($key->c_id);print_r($data['get_category'][0]['name']); ?></td>
                      <td>
                        <?php echo $key->name; ?></td>
                        <td>
                        <?php echo translateText($key->name); ?></td>
                      <td>
                        <img style="width: 10%;" src="<?php echo base_url(); ?>assets/images/categories/<?php echo $key->featured_image;  ?>" alt="prod img" class="img-fluid">
                      </td>
                      <td><a href="#aminity-update" id="<?php echo $key->id;  ?>" class="btn btn-success pull-right get_subcategory send_category" data-toggle="modal"><i class="fa fa-plus"></i>Update</a>
                      </td>
                      <td><a href="" id="<?php echo $key->id;  ?>" class="btn btn-danger pull-right dlt_aminity" data-toggle="modal"><i class="fa fa-plus"></i>Delete</a>
                      </td>
                    </tr> 
                     
                    <?php $i++;} ?>
                    </tbody>
                  </table>
                </div>
              </div>
              </form>
            </div>
          </div>
          <!-- tabs card end -->
        </div>
      </div>

<!-- modal here -->
<!--Aminity Modal -->
<div class="modal" id="aminity-section">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Aminity</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-xl-12">
            <form enctype="multipart/form-data" id="aminity"  method="POST" >
              <div class="form-group">
                <label>Category Name</label>
                <select class="category_list form-control" name="c_id" id="c_id">
                  <option value="">Select Category</option>
                  <?php echo categoryType();?>
                </select>
              </div>
              <div class="form-group">
                <label>Aminity Name</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="userfile" id="userfile" class="form-control">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger aminity_save">submit</button>
      </div>
    </div>
  </div>
</div>

<!-- aminity update Modal update-->
<div class="modal" id="aminity-update">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Aminity</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      
      <div class="modal-body">
        <div class="row">
        <form enctype="multipart/form-data"  id="aminityupdates"  method="POST" >
          <div class="col-xl-12">
              <div class="form-group">
                <label>Category Name</label>
                <select class="category_list form-control" name="cat_id" id="cat_id">
                  <option value="">Select Category</option>
                  <?php echo categoryType();?>
                </select>
              </div>
              <div class="form-group">
                <label>Aminities Name</label>
                <input type="text" name="amitniy_name" id="amitniy_name" class="form-control name">
              </div>
              <input type="hidden" name="row_id" value="" id="row_id">
              <input type="hidden" name="featured_image_i" value="" id="featured_image_i">
              <div class="featured_image"></div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="Uuserfile" id="Uuserfile" class="form-control userfile">
              </div>
            
          </div>
          </form>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger " id="aminity_update">submit</button>
      </div>
    
    </div>
  </div>
</div>
<!-- modal end here -->

<script>
  // $(document).ready(function(){  
  //           $('.send_category').click(function(){
                  
  //                $.ajax({  
  //                     url:"<?php echo base_url(); ?>backend/Login/send_category",  
  //                     method:"post",  
                      
  //                     success:function(resonse){
  //                       $('.category_list').html(resonse);
  //                       }
  //                });  
  //           });  
  //      });
</script>
<script>
  $(document).ready(function(){  
              $('.aminity_save').click(function(){
                  var postData = new FormData($("#aminity")[0]);
                
                
                  
                   $.ajax({
                                   type:'POST',
                                   url:'<?php echo base_url(); ?>backend/Login/aminity_save',
                                   processData: false,
                                   contentType: false,
                                   data : postData,
                                   success:function(data){
                                    alert('Aminity Save');
                                     setTimeout(function(){
                    location.reload(true);
                    
                  }, 2000);       
                                   }
  
                                });
              });  
         });
</script>
<script>
  $(document).ready(function(){  
            $('.get_subcategory').click(function(){
                
                 var subcategory_id = $(this).attr("id");  
                 $.ajax({  
                      url:"<?php echo base_url(); ?>backend/Login/get_aminity",  
                      method:"post",  
                      data:{subcategory_id:subcategory_id},  
                      success:function(resonse){
                          var returnedData = JSON.parse(resonse); 
                           
                           $('#amitniy_name').val(returnedData.name);
                           $('#featured_image_i').val(returnedData.featured_image);
                           $('.featured_image').html('<img style="width: 20%;" class="img-radius" src="<?php echo base_url(); ?>/assets/images/categories/' + returnedData.featured_image + '"" >');
                            
                            $('#row_id').val(returnedData.id);
                            $("#cat_id").val(returnedData.c_id);
  
                         }
                 });  
            });  
       });
</script>

<script>
    $(document).ready(function(){  
      $('#aminity_update').click(function(e){
        e.preventDefault();
        var postData = new FormData($("#aminityupdates")[0]);
        console.log(postData);
        $.ajax({
          type:'POST',
          url:'<?php echo base_url(); ?>backend/Login/aminity_update',
          processData: false,
          contentType: false,
          data : postData,
          success:function(data){
            alert('Aminity Update');
            setTimeout(function(){
            location.reload(true);

            }, 2000);       
          }
        });
      });  
    });
</script>
<script>
  $(document).ready(function(){  
            $('.dlt_aminity').click(function(){
                 if (!confirm('Are you sure you want to delete this aminity?')) return false;
                 var subcategory_id = $(this).attr("id");  
                 $.ajax({  
                      url:"<?php echo base_url(); ?>backend/Login/dlt_aminity",  
                      method:"post",  
                      data:{subcategory_id:subcategory_id},  
                      success:function(resonse){
                          
                        setTimeout(function(){
                    location.reload(true);
                    
                  }, 1000);       
                         }
                 });  
            });  
       });
</script>