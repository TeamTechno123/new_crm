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
            <h4>Roles & Privileges</h4>
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
                <h3 class="card-title">Add New Roles & Privileges</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="col-md-4">
                        <div class="form-group col-md-12 select_sm">
                          <label>Role Name</label>
                          <input type="text" class="form-control form-control-sm" name="first_name" id="first_name"  placeholder="Role Name" required>
                        </div>

                        <div class="form-group col-md-12 select_sm">
                          <label>Select Access </label>
                          <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Access ">
                            <option value="">Select Access </option>
                          </select>
                        </div>

                        <div class=" form-group col-md-12">
                          <div class="card-tools text-right">
                            <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Save</button>
                          </div>
                        </div>

                        <div class="col-md-12">
                            <label>Note : </label>
                            <p class="text-justify">If you enble the model for an employee. It means employee will only see their related record of assign Module </p>
                            <p class="text-justify">If you check for a company view.  It means employee will able to see all record of his/her company of assign module.  </p>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Staff</label>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Core Hr </label>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Organization</label>
                                </div>
                            </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Assets</label>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Events & Mitting</label>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Timesheet</label>
                                </div>
                            </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Recruitment</label>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Payroll</label>
                                </div>
                            </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Performance</label>
                                </div>
                            </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Tickets</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Projects</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Goal Traking</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Files Manager</label>
                                </div>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Traning</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">System</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Accounts</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Transaction</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Payees & Payers</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Accounts Reports</label>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Quote Manager</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Language Setting</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Top Notification</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Apply Jobs</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Theme Setting</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Hr Calender</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Hr Imports</label>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group ">
                                <div class="form-check">
                                  <i class="fas fa-plus mr-4"></i>
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label text-bold">Hr Report</label>
                                </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                  </form>
                </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">List All Roles & Privileges</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Role Id</th>
                    <th>Role Name</th>
                    <th>Menu Permission</th>
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
