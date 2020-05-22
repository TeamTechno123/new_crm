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
            <h4>Change Password</h4>
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

                  <li class="nav-item mb-3">
                    <a href="<?php echo base_url(); ?>Client/change_password" class="nav-link">
                      <i class="far fa-warning"></i> Change Password
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9">

            <!-- Change Password -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"> Change Password</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-4">
                        <label>Old Password</label>
                        <input type="text" class="form-control form-control-sm" name="old_password" id="old_password" value="" placeholder="Change Password" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label>New  Password</label>
                        <input type="text" class="form-control form-control-sm" name="new_password" id="new_password" value="" placeholder="New Password" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Confirm New Password</label>
                        <input type="text" class="form-control form-control-sm" name="confirm_password" id="confirm_password" value="" placeholder="Confirm New Password" required>
                      </div>
                      <div class="form-group col-md-12 text-right m-0">

                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>

                          <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>

                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>
            <!-- // Change Password -->



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
