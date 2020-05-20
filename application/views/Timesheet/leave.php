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
            <h4>Leave</h4>
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
                <h3 class="card-title">Filter</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Hide / Show </button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-3 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company_id" id="company_id" data-placeholder="Choose an Company">
                          <option value="">Choose an Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Employee</label>
                        <select class="form-control select2" name="employee_id" id="employee_id" data-placeholder="Choose an Employee">
                          <option value="">Choose an Employee</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Status</label>
                        <select class="form-control select2" name="status_id" id="status_id" data-placeholder="Choose an Status">
                          <option value="">Choose an Status</option>
                        </select>
                      </div>

                      <div class="form-group col-md-2 text-right mt-4">
                        <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Get</button>
                      </div>
                      </div>

                  </form>
                </div>
            </div>
          </div>

          <div class="col-md-12">

            <!-- Education Level -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default p-0">
                  <div class="card-header">
                    <h5 class="card-title f-16">Add New Leave</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">

                      <div class="col-md-6">
                        <div class="row">
                          <div class="form-group col-md-6 select_sm">
                            <label>Company</label>
                            <select class="form-control select2" name="company" id="company" data-placeholder="Choose an Company">
                              <option value="">Choose an Company</option>
                            </select>
                          </div>

                          <div class="form-group col-md-3 select_sm">
                            <label>Employee</label>
                            <select class="form-control select2" name="employee" id="employee" data-placeholder="Choose an Employee">
                              <option value="">Choose an Employee</option>
                            </select>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>Leave Type</label>
                            <select class="form-control select2" name="employee" id="employee" data-placeholder="Choose an Leave Type">
                              <option value="">Choose an Leave Type</option>
                            </select>
                          </div>

                          <div class="form-group col-md-6">
                            <label>Start Date</label>
                            <input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="" placeholder="Start Date" required>
                          </div>

                          <div class="form-group col-md-6">
                            <label>End Date</label>
                            <input type="text" class="form-control form-control-sm" name="e_date" id="e_date" value="" placeholder="End Date" required>
                          </div>

                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group col-md-12 select_sm">
                          <label>Discription</label>
                          <textarea class="form-control" name="name" rows="2" cols="85"></textarea>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group ">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Half Day</label>
                              </div>
                            </div>
                          </div>
                      </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Profile Picture</label>
                        <input type="file" name="" value="">
                      </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Discription</label>
                        <textarea class="form-control" name="name" rows="2" cols="85"></textarea>
                        </div>

                        <div class="form-group col-md-12 text-right m-0">

                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>

                            <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>

                        </div>


                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">List All Leave </h5>
                  </div>
                  <div class="card-body pt-0">

                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Leave Type</th>
                        <th>Department</th>
                        <th>Employee</th>
                        <th>Request Duration </th>
                        <th>Applied On</th>
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
            <!-- // Education Level -->



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
