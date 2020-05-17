<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Company</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Add New Company</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-6 select_sm">
                        <div class="row">

                          <div class="form-group col-md-12 select_sm">
                            <label>Company Name</label>
                            <input type="text" class="form-control form-control-sm" name="company_name" id="company_name"  placeholder="Company Name" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Company Type</label>
                            <select class="form-control select2" name="company_type" id="company_type" data-placeholder="Company Type">
                              <option value="">Company Type</option>
                            </select>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Legal / Trading Name</label>
                            <input type="text" class="form-control form-control-sm" name="legal_name" id="legal_name"  placeholder="Legal / Trading Name" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Register Number</label>
                            <input type="text" class="form-control form-control-sm" name="Register_no" id="Register_no"  placeholder="Register Number" required>
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

                          <div class="form-group col-md-6 select_sm">
                            <label>Username</label>
                            <input type="text" class="form-control form-control-sm" name="username" id="username"  placeholder="Username" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Password</label>
                            <input type="text" class="form-control form-control-sm" name="password" id="password"  placeholder="Password" required>
                          </div>

                        </div>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <div class="row">

                          <div class="form-group col-md-12 select_sm">
                            <label>Tax Number / EIN</label>
                            <input type="text" class="form-control form-control-sm" name="tax_no" id="tax_no"  placeholder="Tax Number / EIN" required>
                          </div>

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


                            <div class="form-group col-md-12 select_sm">
                              <label>Company Logo</label>
                              <input type="file" name="" value="">
                            </div>

                        </div>
                      </div>

                      <div class="form-group col-md-5 select_sm">
                        <label>Currency </label>
                        <select class="form-control select2" name="currency" id="currency" data-placeholder="Currency ">
                          <option value="">Currency </option>
                        </select>
                      </div>

                      <div class="form-group col-md-5 select_sm">
                        <label>Time Zone </label>
                        <select class="form-control select2" name="time_zone" id="time_zone" data-placeholder="Time Zone ">
                          <option value="">Time Zone </option>
                        </select>
                      </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <button class="btn btn-sm btn-primary float-right px-3">Save</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">List All Company</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Currency</th>
                    <th>Time Zone</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></button>
                          <button type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Party');"><i class="fa fa-trash text-danger"></i></button>
                        </div>
                      </td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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
