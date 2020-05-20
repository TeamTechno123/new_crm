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
            <h4>Employee</h4>
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
                <h3 class="card-title">Add New Employee</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-3 select_sm">
                        <label>First Name</label>
                        <input type="text" class="form-control form-control-sm" name="first_name" id="first_name"  placeholder="First Name" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Last Name</label>
                        <input type="text" class="form-control form-control-sm" name="last_name" id="last_name"  placeholder="Last Name" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Employee Id</label>
                        <input type="text" class="form-control form-control-sm" name="employee_id" id="employee_id"  placeholder="Employee Id" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Date of Joining</label>
                        <input type="text" class="form-control form-control-sm" name="joining_date" id="joining_date"  placeholder="Date of Joining" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Company">
                          <option value="">Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Location</label>
                        <select class="form-control select2" name="location_id" id="location_id" data-placeholder="Location">
                          <option value="">Location</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Main Department</label>
                        <select class="form-control select2" name="department_id" id="department_id" data-placeholder="Main Department">
                          <option value="">Main Department</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Designation</label>
                        <select class="form-control select2" name="designation_id" id="designation_id" data-placeholder="Designation">
                          <option value="">Designation</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Username</label>
                        <input type="text" class="form-control form-control-sm" name="username" id="username"  placeholder="Username" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email"  placeholder="Email" required>
                      </div>



                      <div class="form-group col-md-3 select_sm">
                        <label>Gender</label>
                        <select class="form-control select2" name="gender" id="gender" data-placeholder="Gender">
                          <option value="">Gender</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Office Shift</label>
                        <select class="form-control select2" name="office_shift" id="office_shift" data-placeholder="Office Shift">
                          <option value="">Office Shift</option>
                        </select>
                      </div>


                      <div class="form-group col-md-3 select_sm">
                        <label>Date Of Birth</label>
                        <input type="text" class="form-control form-control-sm" name="dob" id="dob"  placeholder="Date Of Birth" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Contact No.</label>
                        <input type="text" class="form-control form-control-sm" name="contact_no" id="contact_no"  placeholder="Contact No." required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Password</label>
                        <input type="text" class="form-control form-control-sm" name="password" id="password"  placeholder="Password" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control form-control-sm" name="c_password" id="c_password"  placeholder="Confirm Password" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Role </label>
                        <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Role ">
                          <option value="">Role </option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Reports To </label>
                        <select class="form-control select2" name="reports_to" id="reports_to" data-placeholder="Reports To ">
                          <option value="">Reported To </option>
                        </select>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Leave Category</label>
                        <input type="text" class="form-control form-control-sm" name="leave_category" id="leave_category"  placeholder="Leave Category" required>
                      </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Address</label>
                        <input type="text" class="form-control form-control-sm" name="address" id="address"  placeholder="Address" required>
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
                <h3 class="card-title">List All Employee</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Employee Name</th>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Reports To </th>
                    <th>Role </th>

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
