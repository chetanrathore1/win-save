<style>
	.summary {
		display: flex;
		flex-direction: row;
		width: 100%;
	}
	.summary > div {
		display: flex;
		justify-content: space-between;
		align-content: center;
		width: 100%;
		padding: 10px 0px;
	}
	.summary > .summary_heading
	{
		font-weight: 900;
	}
	.avatar-upload {
		position: relative;
		max-width: 100%;

	}
	.avatar-upload .avatar-edit {
		position: absolute;
		right: 12px;
		z-index: 1;
		top: 10px;
	}
	.avatar-upload .avatar-edit input {
		display: none;
	}
	.avatar-upload .avatar-edit input + label {
		display: inline-block;
		width: 34px;
		height: 34px;
		margin-bottom: 0;

		background: #FFFFFF;
		border: 1px solid transparent;
		box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
		cursor: pointer;
		font-weight: normal;
		transition: all 0.2s ease-in-out;
	}
	.avatar-upload .avatar-edit input + label:hover {
		background: #f1f1f1;
		border-color: #d6d6d6;
	}
	.avatar-upload .avatar-edit input + label:after {
		content: "\f040";
		font-family: 'FontAwesome';
		color: #757575;
		position: absolute;
		top: 10px;
		left: 0;
		right: 0;
		text-align: center;
		margin: auto;
	}
	.avatar-upload .avatar-preview {
		width: 200px;
		height: 150px;
		position: relative;

		border: 6px solid #F8F8F8;
		box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
	}
	.avatar-upload .avatar-preview > div {
		width: 100%;
		height: 100%;

		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
	}
	div#example_wrapper > .row:first-child {
		top:102px!important;

	}
</style>
<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
	<!-- ============ Body content start ============= -->
	<div class="main-content">
		<div class="breadcrumb">
			<h1 class="mr-2">Basic</h1>
			<ul>
				<li><a href="#">Form</a></li>
				<li>Find Us</li>
			</ul>
		</div>
		<div class="separator-breadcrumb border-top"></div>
		<div id="accordion4">
			<div class="card">
				<div class="card-header">
					<a class="card-link" data-toggle="collapse" href="#u88">
						Find Us
					</a>
				</div>
				<div id="u88" class="collapse" data-parent="#accordion4">
					<div class="card-body">
						<div class="float-right">
							<button class="btn btn-secondary"  data-toggle="modal" data-target="#findUs_add">+ Add</button>
						</div>
						<div class="table-responsive" style="height: auto;">
							<table class="table table-bordered table-hover" id="example">
								<thead>
									<tr>
                                        <th>S.no</th>
                                        <th>Title En</th>
                                        <th>Title Ar</th>
                                        <th>Link</th>
                                        <th>Priority</th>
                                        <th>Update</th>
                                        <th>Remove</th>
                                    </tr>	
								</thead>
								<tbody>
									<?php $i=1; 
                                    if(!empty($get_helps)){
                                    foreach($get_helps as $key) { ?>
                                    <tr id="row_<?php echo $key['support_id']; ?>">
										<td><?php echo $i; ?></td>
										<td><?php echo $key['title']; ?></td>
										<td><?php echo translateText($key['title']); ?></td>
										<td><?php echo $key['link']; ?></td>
										<td><?php echo $key['priority']; ?></td>
										<td><button class="btn btn-success" onclick="getFindUsData('<?php echo $key['support_id']; ?>');" data-toggle="modal" data-target="#findUs_update">Update</button></td>
										<td><span class="text-danger" onclick="deleteRow('<?php echo $key['support_id']; ?>');"><i class="fa fa-close"></i></span></td>
                                    </tr>
                                    <?php $i++;}} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div><!-- Footer Start -->
		<div class="flex-grow-1"></div>
		<div class="app-footer">
			<div class="row">
				<div class="col-md-9">
					<p><strong>Hotbit</strong></p>
					<P>Hotbit came into the existence with the aspirations to develop customize creative mobile apps that can cater the requirements of clients in a cost-effective manner. The company was started by two zealous engineers who always wanted to bring the change by proving real-world solutions to stand out from the rest of competitors. With a hope to reach beyond clouds and big plans whirling in the mind, we made our way out and blossomed up with many successful business apps. Our excellent industry based approach helps to deliver ground breaking mobile apps which helped the client to come up with the proficient business.</P>
				</div>
			</div>
			<div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
				<a class="btn btn-primary text-white btn-rounded" href="https://www.hotbitinfotech.com" target="_blank">Hotbit India</a>
				<span class="flex-grow-1"></span>
				<div class="d-flex align-items-center">
					<img class="logo" src="../../dist-assets/images/logo.png" alt="">
					<div>
						<p class="m-0">&copy; 2018 Win & Save</p>
						<p class="m-0">All rights reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- ============ Search UI Start ============= -->
<div class="search-ui">
	<div class="search-header">
		<img src="../../dist-assets/images/logo.png" alt="" class="logo">
		<button class="search-close btn btn-icon bg-transparent float-right mt-2">
			<i class="i-Close-Window text-22 text-muted"></i>
		</button>
	</div>
	<input type="text" placeholder="Type here" class="search-input" autofocus>
	<div class="search-title">
		<span class="text-muted">Search results</span>
	</div>
		<!-- <div class="search-results list-horizontal">
		<div class="list-item col-md-12 p-0">
		<div class="card o-hidden flex-row mb-4 d-flex">
		<div class="list-thumb d-flex">
	<!-- TUMBNAIL -->
	<img src="../../dist-assets/images/products/headphone-1.jpg" alt="">
</div>

</div>
</div>


</div>
<!-- PAGINATION CONTROL -->

</div>


<!-- Button to Open the Modal -->
<!-- The Modal -->
<div class="modal" id="findUs_add">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Find Us Add</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?php echo base_url();?>backend/Supports/findUs_save" method="POST" id="AddFindForm">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="">Title En.</label>
								<input type="text" name="title_en" id="FAtitle_en" class="form-control" placeholder="Title En">
							</div>
                            <div class="form-group">
								<label for="">Link</label>
								<input type="text" name="link" id="FAlink" class="form-control" placeholder="Link">
							</div>
						</div>
                        <div class="col-6">
							<div class="form-group">
								<label for="">Title Ar</label>
								<input type="text" name="title_ar" id="FAtitle_ar" class="form-control" placeholder="Title Ar">
							</div>
							<div class="form-group">
								<label>Priority</label>
								<input type="number" min='1' name="priority" id="FApriority" class="form-control" placeholder="set priority">
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-dark float-right">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="findUs_update">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Question & Answer Update</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-12 alert alert-warning"  id="Uwarning" role="alert"></div>
					<div class="col-12 alert alert-success" id="Usuccess" role="alert"></div>
				</div>
				<form action="<?php //echo base_url('backend/Supports/findUs_update);?>" method="POST" id="UpdateFindForm">
                    <div class="row">
						<div class="col-6">
                            <input type="hidden" name="FUfindUs_id" id="FUfindUs_id" value="">
							<div class="form-group">
								<label for="">Question En.</label>
								<input type="text" name="FUtitle_en" id="FUtitle_en" class="form-control" placeholder="Title En" value="">
							</div>
							<div class="form-group">
								<label for="">Link</label>
								<input type="text" name="FUlink" id="FUlink" class="form-control" placeholder="Link" value="">
							</div>
						</div>
                        <div class="col-6">
							<div class="form-group">
								<label for="">Title Ar</label>
								<input type="text" name="FUtitle_ar" id="FUtitle_ar" class="form-control" placeholder="Title Ar" value="">
							</div>
                            <div class="form-group">
								<label>Priority</label>
								<input type="number" min='1' name="FUpriority" id="FUpriority" class="form-control" placeholder="set priority" value="">
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-dark float-right" id="updateFindUsData">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php //include('footer.php');?>
<script>
	$("#success").hide();
	$("#warning").hide();
	$("#Usuccess").hide();
	$("#Uwarning").hide();

    var getFindUsData = function(id){
        $.ajax({
        type : 'POST',
        url : '<?php echo base_url();?>backend/Supports/getInfo',
        data : {id : id, type : "find_us"},
        success:function(data){
            var getInfo = JSON.parse(data);
            // console.log(Object.values(getInfo.result));
            $("#FUfindUs_id").val(getInfo.result[0].support_id);
            $("#FUtitle_en").val(getInfo.result[0].title_en);
            $("#FUlink").val(getInfo.result[0].link);
            $("#FUtitle_ar").val(getInfo.result[0].title_ar);
            $("#FUpriority").val(getInfo.result[0].priority);
        }
        });
    }

    // $("#updateFindUsData").on('click',function(){
    //     var FUfindUs_id = $("#FUfindUs_id").val();
    //     var FUtitle_en = $("#FUtitle_en").val();
    //     var FUlink = $("#FUlink").val();
    //     var FUtitle_ar = $("#FUtitle_ar").val();
    //     var FUpriority = $("#FUpriority").val();
    //     $.ajax({
    //         type : 'POST',
    //         url : '<?php echo base_url();?>backend/Supports/findUs_update',
    //         data : {find_id:FUfindUs_id,title_en:FUtitle_en,link:FUlink,title_ar:FUtitle_ar,priority:FUpriority},
    //         success:function(data){
    //             var getInfo = JSON.parse(data);
    //             alert(getInfo.message);
    //         }
    //     });
    // });

  var deleteRow = function(id) {
    var result = confirm("Want to delete?");
    if (result) {
      var url = '<?php echo base_url(); ?>backend/Manage_vendors/delete_row';  
      $.ajax({
        type: "POST",
        url: url,
        data: {id: id,tbl:'support_all',col_name:'support_id'},
      })
      .done(function(result){
        var result = JSON.parse(result);
        if( parseInt(result.status) == 1 ) {
          $('#row_'+id).hide();
        }
        var message = result.message;
        alert(message);
      }); 
    }
  };
</script>

<script>
	$(document).ready(function() {
		var form = $('#UpdateFindForm');
		var errorHandler1 = $('.errorHandler', form);
		var successHandler1 = $('.successHandler', form);
		form.validate({
			errorElement: "span",
			errorClass: 'help-block',
			errorPlacement: function (error, element) {
				if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { 
					error.insertAfter($(element).closest('.form-group').children('div').children().last());
				} else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
					error.insertAfter($(element).closest('.form-group').children('div'));
				} else {
					error.insertAfter(element);
				}
			},
			ignore: "",
			rules: {
				FUtitle_en: {
					required: true
				},
				FUlink:{
					required : true, 
					url:true
				},
				FUpriority: {
					required: true
				}
			},
			invalidHandler: function (event, validator) { //display error alert on form submit
				successHandler1.hide();
				errorHandler1.show();
			},
			highlight: function (element) {
				$(element).closest('.help-block').removeClass('valid');
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
			},
			unhighlight: function (element) {
				$(element).closest('.form-group').removeClass('has-error');
			},
			success: function (label, element) {
				label.addClass('help-block valid');
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
			},
			submitHandler: function (form) {
				successHandler1.show();
				errorHandler1.hide();
				form.submit();
				var FUfindUs_id = $("#FUfindUs_id").val();
				var FUtitle_en = $("#FUtitle_en").val();
				var FUlink = $("#FUlink").val();
				var FUtitle_ar = $("#FUtitle_ar").val();
				var FUpriority = $("#FUpriority").val();
				$.ajax({
					type : 'POST',
					url : '<?php echo base_url();?>backend/Supports/findUs_update',
					data : {find_id:FUfindUs_id,title_en:FUtitle_en,link:FUlink,title_ar:FUtitle_ar,priority:FUpriority},
					success:function(data){
						var ress = JSON.parse(data);
						if(ress.status == 1){
							$("#Usuccess").html(ress.message).show();
							window.setTimeout(function(){location.reload()},3000)
						} else {
							$("#Uwarning").html(ress.message).show().fadeOut();
						}
					}
				});
			}
		});
	});

	$(document).ready(function() {
		var form = $('#AddFindForm');
		var errorHandler1 = $('.errorHandler', form);
		var successHandler1 = $('.successHandler', form);
		form.validate({
			errorElement: "span",
			errorClass: 'help-block',
			errorPlacement: function (error, element) {
				if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { 
					error.insertAfter($(element).closest('.form-group').children('div').children().last());
				} else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
					error.insertAfter($(element).closest('.form-group').children('div'));
				} else {
					error.insertAfter(element);
				}
			},
			ignore: "",
			rules: {
				title_en: {
					required: true
				},
				link:{
					required : true,
					url : true
				},
				priority: {
					required: true
				}
			},
			invalidHandler: function (event, validator) { //display error alert on form submit
				successHandler1.hide();
				errorHandler1.show();
			},
			highlight: function (element) {
				$(element).closest('.help-block').removeClass('valid');
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
			},
			unhighlight: function (element) {
				$(element).closest('.form-group').removeClass('has-error');
			},
			success: function (label, element) {
				label.addClass('help-block valid');
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
			},
			submitHandler: function (form) {
				successHandler1.show();
				errorHandler1.hide();
				form.submit();
			}
		});
	});
</script>

<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#imagePreview').css('background-image', 'url('+e.target.result +')');
				$('#imagePreview').hide();
				$('#imagePreview').fadeIn(650);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#imageUpload").change(function() {
		readURL(this);
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#imagePreview1').css('background-image', 'url('+e.target.result +')');
				$('#imagePreview1').hide();
				$('#imagePreview1').fadeIn(650);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#imageUpload1").change(function() {
		readURL(this);
	});
</script>