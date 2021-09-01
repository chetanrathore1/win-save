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
                    <h1>Sub Category</h1>
                    <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Sub category List</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
          <div class="row">
            <!-- order-card start -->
            <div class="col-sm-12">
                  <form class="form-horizontal" id="submit">
              <div class="card">
                <div class="card-header">
              
                    <div class="row">
                      <div class="col-xl-6">
                       
                      </div>
                      <div class="col-xl-6">
                        <div class="pull-right"> <a href="#sub-category-section" class="btn btn-dark pull-right send_category" data-toggle="modal"><i class="fa fa-plus"></i> Add Sub Category</a>
                        </div>
                      </div>
                    </div>
                </div>
                <?php echo form_open_multipart( 'category_save');?>
                <div class="card-body">
                  <table class="table table-bordered table-hover" id="example">
                    <thead>
                    <tr class="text-uppercase">
                      <th>#id</th>
                       <th>Category Name</th>
                      <th>Sub Category Name</th>
                      <th>Image</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=1; foreach ($get_subcategory as $key) { ?>
                    <tr>
                      <td>
                        <?php echo $i; ?>
                      </td>
                      <td><?php  $data['get_category'] =$this->Modlogin->get_categorybyid($key->c_id);print_r($data['get_category'][0]['name']); ?></td>
                      <td>
                        <?php echo $key->name; ?></td>
                      <td>
                        <img style="width: 10%;" src="<?php echo base_url(); ?>assets/images/categories/<?php echo $key->featured_image;  ?>" alt="prod img" class="img-fluid">
                      </td>
                      <td><a href="#subcategory-update" id="<?php echo $key->id;  ?>" class="btn btn-success pull-right get_subcategory send_category" data-toggle="modal"><i class="fa fa-plus"></i>Update</a>
                      </td>
                      <td><a href="" id="<?php echo $key->id;  ?>" class="btn btn-danger pull-right dlt_subcategory" data-toggle="modal"><i class="fa fa-plus"></i>Delete</a>
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
    
<script>
  $(document).ready(function(){  
            $('.send_category').click(function(){
                  
                 $.ajax({  
                      url:"<?php echo base_url(); ?>backend/Login/send_category",  
                      method:"post",  
                      
                      success:function(resonse){
                        $('.category_list').html(resonse);
                        }
                 });  
            });  
       });
</script>
<script>
  $(document).ready(function(){  
              $('.subcategory_save').click(function(){
                  var postData = new FormData($("#subcate")[0]);
                
                
                  
                   $.ajax({
                                   type:'POST',
                                   url:'<?php echo base_url(); ?>backend/Login/subcategory_save',
                                   processData: false,
                                   contentType: false,
                                   data : postData,
                                   success:function(data){
                                    alert('Category Save');
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
                      url:"<?php echo base_url(); ?>backend/Login/get_subcategory",  
                      method:"post",  
                      data:{subcategory_id:subcategory_id},  
                      success:function(resonse){
                          var returnedData = JSON.parse(resonse);  
                           $('.name').val(returnedData.name);
                           $('.featured_image').val(returnedData.featured_image);
                           $('.featured_image').html('<img style="width: 20%;" class="img-radius" src="<?php echo base_url(); ?>/assets/images/categories/' + returnedData.featured_image + '"" >');
                           
                             $('.id').val(returnedData.id);
  
                         }
                 });  
            });  
       });
</script>

<script>
  $(document).ready(function(){  
              $('.subcategory_update').click(function(){
                  var postData = new FormData($("#subcateupdate")[0]);
                 
                 
                  
                   $.ajax({
                                   type:'POST',
                                   url:'<?php echo base_url(); ?>backend/Login/subcategory_update',
                                   processData: false,
                                   contentType: false,
                                   data : postData,
                                   success:function(data){
                                    alert('Category Update');
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
            $('.dlt_subcategory').click(function(){
                 if (!confirm('Are you sure you want to delete this subcategory?')) return false;
                 var subcategory_id = $(this).attr("id");  
                 $.ajax({  
                      url:"<?php echo base_url(); ?>backend/Login/dlt_subcategory",  
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