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
            <h4>Employee Exit Type</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <?php include('master_menu.php') ?>
          </div>
          <div class="col-md-9">
            <!-- Employee Exit Type -->
            <div class="row">
              <div class="col-md-5">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"><?php if(isset($employee_exit_type_info)){ echo 'Update'; } else{ echo 'Add New'; } ?> Employee Exit Type</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-12">
                        <label>Employee Exit Type</label>
                        <input type="text" class="form-control form-control-sm" name="employee_exit_type_name" id="employee_exit_type_name" value="<?php if(isset($employee_exit_type_info)){ echo $employee_exit_type_info['employee_exit_type_name']; } ?>" autofocus placeholder="Employee Exit Type" required>
                      </div>
                      <div class="form-group col-md-12 text-right m-0">
                        <?php if(isset($employee_exit_type_info)){ ?>
                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>
                        <?php } else{ ?>
                          <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>
                        <?php } ?>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">List All Employee Exit Type</h5>
                  </div>
                  <div class="card-body pt-0">
                    <table id="example1" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Employee Exit Type</th>
                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($employee_exit_type_list as $list) { $i++; ?>
                          <tr>
                            <td style="display:none;"><?php echo $i; ?></td>
                            <td><?php echo $list->employee_exit_type_name; ?></td>
                            <td>
                              <div class="btn-group">
                                <a href="<?php echo base_url(); ?>Master/edit_employee_exit_type/<?php echo $list->employee_exit_type_id; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                                <a href="<?php echo base_url(); ?>Master/delete_employee_exit_type/<?php echo $list->employee_exit_type_id; ?>" class="btn btn-sm btn-default" onclick="return confirm('Delete this Employee Exit Type');" ><i class="fa fa-trash text-danger"></i></a>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Employee Exit Type -->
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
