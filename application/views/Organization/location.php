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
            <h4>Location</h4>
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
                <h3 class="card-title">Add New Location</h3>
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
                            <label>Company</label>
                            <select class="form-control select2" name="company" id="company" data-placeholder="Company">
                              <option value="">Company</option>
                            </select>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>Location Name</label>
                            <input type="text" class="form-control form-control-sm" name="location_name" id="location_name"  placeholder="Location Name" required>
                          </div>


                          <div class="form-group col-md-12 select_sm">
                            <label>Email</label>
                            <input type="text" class="form-control form-control-sm" name="email" id="email"  placeholder="Email" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Phone No.</label>
                            <input type="text" class="form-control form-control-sm" name="phone_no" id="phone_no"  placeholder="Phone No." required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Fax No.</label>
                            <input type="text" class="form-control form-control-sm" name="fax_no" id="fax_no"  placeholder="Fax No." required>
                          </div>

                        </div>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <div class="row">

                          <div class="form-group col-md-12 select_sm">
                            <label>Location Head</label>
                            <select class="form-control select2" name="location_head" id="location_head" data-placeholder="Location Head">
                              <option value="">Location Head</option>
                            </select>
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
                            <label>State / province</label>
                            <input type="text" class="form-control form-control-sm" name="state" id="state"  placeholder="State / province" required>
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


          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">List All Location</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Location Name</th>
                    <th>Location Head</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Added By</th>
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
