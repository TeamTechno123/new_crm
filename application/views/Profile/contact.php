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
            <h4> Contact</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <?php include('side_panel.php') ?>
          </div>
          <div class="col-md-9">

            <!-- Contact -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">Add New Contact</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="col-md-6">

                        <div class="row">


                        <div class="form-group col-md-12 select_sm">
                          <label>Relation </label>
                          <select class="form-control select2" name="relation" id="relation" data-placeholder="Choose Relation Type ">
                            <option value="">Relation </option>
                          </select>
                        </div>

                        <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Primary Contact</label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Dependent</label>
                          </div>
                        </div>


                        <div class="form-group col-md-12">
                          <label>Name</label>
                          <input type="text" class="form-control form-control-sm" name="name" id="name" value="" placeholder="Name" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label>Phone</label>
                          <input type="text" class="form-control form-control-sm" name="phone" id="phone" value="" placeholder="Phone" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label>Ext</label>
                          <input type="text" class="form-control form-control-sm" name="ext" id="ext" value="" placeholder="Ext" required>
                        </div>

                        <div class="form-group col-md-12">
                          <label>Mobile</label>
                          <input type="text" class="form-control form-control-sm" name="mobile" id="mobile" value="" placeholder="Mobile" required>
                        </div>

                        <div class="form-group col-md-12">
                          <label>Home</label>
                          <input type="text" class="form-control form-control-sm" name="home" id="home" value="" placeholder="Home" required>
                        </div>

                          </div>
                      </div>

                      <div class="col-md-6">
                        <div class="row">
                        <div class="form-group col-md-12">
                          <label>Email</label>
                          <input type="text" class="form-control form-control-sm" name="email" id="email" value="" placeholder="Email" required>
                        </div>

                        <div class="form-group col-md-12">
                          <label>Dependent</label>
                          <input type="text" class="form-control form-control-sm" name="dependent" id="dependent" value="" placeholder="Dependent" required>
                        </div>

                        <div class="form-group col-md-12">
                          <label>Address</label>
                          <input type="text" class="form-control form-control-sm" name="address" id="address" value="" placeholder="Address" required>
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




                      <div class="form-group col-md-12 text-right m-0">

                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>

                          <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>

                      </div>
                    </div>
                  </form>
                </div>

                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">List All Contact Record</h5>
                  </div>
                  <div class="card-body pt-0">

                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Email </th>
                        <th>Mobile</th>

                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>

                          <tr>
                            <td style="display:none;"></td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>

                            <td>asdf</td>

                            <td>
                              <div class="btn-group">
                                <a href="<?php echo base_url(); ?>Master/edit_education_level/" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                                <a href="<?php echo base_url(); ?>Master/delete_education_level/" class="btn btn-sm btn-default" onclick="return confirm('Delete this Education Level');" ><i class="fa fa-trash text-danger"></i></a>
                              </div>
                            </td>
                          </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
            <!-- // Contact -->



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
