
<?php $this->load->view('backend/Header');?>
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
    width: 100%;
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
</style>
<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
  <!-- ============ Body content start ============= -->
  <div class="main-content">
    <div class="breadcrumb">
      <h1 class="mr-2">Rewards And Gift</h1>
      <ul>
        <li><a href="#">Admin</a></li>
        <li>Assign Gift To Level</li>
      </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div id="accordion">
      <div class="card">
        <div class="card-header">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
            1. Assign Gift To Level
          </a>
        </div>
        <div id="collapseTwo" class="collapse show" data-parent="#accordion">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <dl>
                  <dt>Level Pick</dt>
                  <dd>
                    <div class="form-group">
                      <label for="">Level Pick</label>
                      <select class="form-control">
                        <option>Level 1</option>
                        <option>Level 2</option>
                        <option>Level 3</option>
                        <option>Level 4</option>
                        <option>Level 5</option>
                        <option>Level 6</option>
                      </select>
                    </div>
                  </dd>
                </dl>
              </div> 
              <div class="col-6">
                <dl>
                  <dt>Level Gift Value</dt>
                  <dd>100</dd>
                </dl>
              </div>
              <div class="table-responsive">
                <table class="table  display">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Vendor</th>
                      <th>Gift</th>
                      <th>Original Quantity</th>
                      <th>Remaining quantity</th>
                      <th>Value</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>   
                        <div class="form-group">
                          <select class="form-control">
                            <option>Food</option>
                            <option>Fashion</option>
                          </select>
                        </div></td>
                        <td> <div class="form-group">
                          <select class="form-control">
                            <option>Burger King</option>
                            <option>Pizza</option>
                          </select>
                        </div></td>
                        <td>  <div class="form-group">
                          <select class="form-control">
                            <option>Meal</option>
                            <option>Snack</option>
                          </select>
                        </div></td>
                        <td> <div class="form-group">
                          <input type="number" name="" class="form-control">
                        </div></td>
                        <td> <div class="form-group">
                          <input type="number" name="" class="form-control">
                        </div></td>
                        <td> <div class="form-group">
                          <input type="number" name="" class="form-control">
                        </div></td>
                        <td><button class="btn btn-danger" > <span><i class="fa fa-close"></i></span></button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Start -->
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
<div class="flex-grow-1 pl-2 d-flex">
  <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
    <!-- OTHER DATA -->
    <a href="#" class="w-40 w-sm-100">
      <div class="item-title">Headphone 1</div>
    </a>
    <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
    <p class="m-0 text-muted text-small w-15 w-sm-100"><small>SAR</small> 300
      <del class="text-secondary"><small>SAR</small> 400</del>
    </p>
    <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
      <span class="badge badge-danger">Sale</span>
    </p>
  </div>
</div>
</div>
</div>
</div>
<!-- PAGINATION CONTROL -->
</div>


<!-- Button to Open the Modal -->
<!-- The Modal -->
<div class="modal" id="update_contacts">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Country</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="">Nationality English</label>
                <select class="form-control">
                  <option>Category 1</option>
                  <option>Category 2</option>
                  <option>Category 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Nationality Arabic</label>
                <select class="form-control">
                  <option>Category 1</option>
                  <option>Category 2</option>
                  <option>Category 3</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Upload image</label>
                <input type="file" name="Saving" class="form-control" value="Priorty Listing">
              </div>
              <div class="form-group">
                <label for="">Priorty Listing</label>
                <input type="number" name="Saving" class="form-control" value="Priorty Listing">
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-dark float-right">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="contacts">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Country</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="">Nationality English</label>
                <select class="form-control">
                  <option>Category 1</option>
                  <option>Category 2</option>
                  <option>Category 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Nationality Arabic</label>
                <select class="form-control">
                  <option>Category 1</option>
                  <option>Category 2</option>
                  <option>Category 3</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Upload image</label>
                <input type="file" name="Saving" class="form-control" value="Priorty Listing">
              </div>
              <div class="form-group">
                <label for="">Priorty Listing</label>
                <input type="number" name="Saving" class="form-control" value="Priorty Listing">
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-dark float-right">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('backend/Footer');?>

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