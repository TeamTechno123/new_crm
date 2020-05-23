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
            <h4>Performance Indicator </h4>
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
                <h3 class="card-title">Set New Indicator</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-4 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Company">
                          <option value="">Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4 select_sm">
                        <label>Employee</label>
                        <select class="form-control select2" name="goal_type" id="goal_type" data-placeholder="Choose an Employee">
                          <option value="">Choose an Employee</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4 select_sm">
                        <label>Select Month</label>
                        <input type="text" class="form-control form-control-sm" name="month" id="month"  placeholder="Select Month" required>
                      </div>


                      <div class=" col-md-12 ">
                        <table class="table table-condensed" width="100%">
                          <thead>
                            <tr>
                              <th colspan="2">Technical Competencies</th>
                              <th colspan="2">Organizational Competencies</th>
                            </tr>
                          <tr>
                            <th>Indicator</th>
                            <th>Set Value</th>
                            <th>Indicator</th>
                            <th>Set Value</th>
                          </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                  <label>Customer Experience</label>
                              </td>
                              <td>
                                <select class="form-control select2" name="c_value" id="c_value" data-placeholder="None">
                                  <option value="">Company</option>
                                </select>
                              </td>
                              <td>Professionalism</td>
                              <td>
                                <select class="form-control select2" name="profession" id="profession" data-placeholder="None">
                                  <option value="">Company</option>
                                </select>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                  <label>Marketing</label>
                              </td>
                              <td>
                                <select class="form-control select2" name="c_value" id="c_value" data-placeholder="None">
                                  <option value="">Company</option>
                                </select>
                              </td>
                              <td>Integrety</td>
                              <td>
                                <select class="form-control select2" name="integrety" id="integrety" data-placeholder="None">
                                  <option value="">Company</option>
                                </select>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                  <label>Administration</label>
                              </td>
                              <td>
                                <select class="form-control select2" name="admin" id="admin" data-placeholder="None">
                                  <option value="">Company</option>
                                </select>
                              </td>
                              <td>Attendance</td>
                              <td>
                                <select class="form-control select2" name="attendance" id="attendance" data-placeholder="None">
                                  <option value="">Company</option>
                                </select>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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
                <h3 class="card-title">List All Performance Indicator </h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Designation</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Added By</th>
                    <th>Created at</th>
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
