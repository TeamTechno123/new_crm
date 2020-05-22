<!DOCTYPE html>
<html>
<style media="screen">
  .dataTables_length{
    display: none !important;
  }
  .dataTables_filter{
    display: none !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Basic Information</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body p-0" style="display: block;">

                <div class="text-center pt-3">
                  <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url(); ?>assets/images/user/user_12_1_1587120907.jpg" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Nina Mcintire</h3>
                <p class="text-muted text-center">Software Engineer</p>
                <ul class="nav nav-pills flex-column master_menu">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>Client/basic_information" class="nav-link">
                      <i class="far fa-edit"></i> Basic Information
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>Client/change_password" class="nav-link">
                      <i class="far fa-warning"></i> Change Password
                    </a>
                  </li>

                </ul>
              </div>
            </div>

          </div>
          <div class="col-md-9">

            <!-- Basic Information -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"> Basic Information</h5>
                  </div>
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-6 select_sm">
                        <div class="row">

                          <div class="form-group col-md-12 select_sm">
                            <label>Client</label>
                            <input type="text" class="form-control form-control-sm" name="client_name" id="client_name"  placeholder="Client" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Company Name</label>
                            <input type="text" class="form-control form-control-sm" name="company_name" id="company_name"  placeholder="Company Name" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Contact Number</label>
                            <input type="text" class="form-control form-control-sm" name="contact_no" id="contact_no"  placeholder="Contact Number" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Email</label>
                            <input type="text" class="form-control form-control-sm" name="email" id="email"  placeholder="Email" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Website</label>
                            <input type="text" class="form-control form-control-sm" name="website" id="website"  placeholder="Website" required>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>Company Logo</label>
                            <input type="file" name="" value="">
                          </div>

                        </div>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <div class="row">

                          <div class="form-group col-md-12 select_sm">
                            <label>Address</label>
                            <input type="text" class="form-control form-control-sm" name="address" id="address"  placeholder="Address" required>
                          </div>

                          <div class="form-group col-md-4 select_sm">
                            <label>City</label>
                            <input type="text" class="form-control form-control-sm" name="city" id="city"  placeholder="City" required>
                          </div>

                          <div class="form-group col-md-4 select_sm">
                            <label>State / Province</label>
                            <input type="text" class="form-control form-control-sm" name="state" id="state"  placeholder="State / Province" required>
                          </div>

                          <div class="form-group col-md-4 select_sm">
                            <label>Zip code</label>
                            <input type="text" class="form-control form-control-sm" name="zip_code" id="zip_code"  placeholder="Zip code" required>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>Country </label>
                            <select class="form-control select2" name="country_code" id="country_code" data-placeholder="Country ">
                              <option value="">Country </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <button class="btn btn-sm btn-primary float-right px-3">Save</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
            <!-- // Basic Information -->



          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>

<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Saved successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.info('Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Deleted successfully');
    });
  <?php } ?>
</script>
