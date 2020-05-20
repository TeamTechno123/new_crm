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
            <h4>Calender</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">

            <!-- Education Level -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default p-0">
                  <div class="card-header">
                    <h5 class="card-title f-16"> Report Filter</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-3">
                        <label>Date</label>
                        <input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="" placeholder="Date" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Company">
                          <option value="">Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Employee</label>
                        <select class="form-control select2" name="employee" id="employee" data-placeholder="Employee">
                          <option value="">Employee</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2 text-right mt-4">
                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Get</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-12">
              <div class="row">
                <div class="col-md-3">
                  <div class="card card-default p-0">
                    <div class="card-header">
                      <h5 class="card-title f-16"> Vaibhav Wadkar</h5>
                    </div>
                    <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                      <div class="card-body row">
                        <div class="form-group col-md-12">
                          <label>Company</label>
                          </div>

                        <div class="form-group col-md-12 select_sm">
                          <label>Deprtment</label>
                        </div>

                        <div class="form-group col-md-12 select_sm">
                          <label>Designation</label>
                        </div>

                        <div class="form-group col-md-12 select_sm">
                          <label>Employee Id</label>
                        </div>

                        <div class="form-group col-md-12 select_sm">
                          <label>Total Present</label>
                        </div>

                        <div class="form-group col-md-12 select_sm">
                          <label>Total Absent</label>
                        </div>

                        <div class="form-group col-md-12 select_sm">
                          <label>Total leave</label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="card card-default">
                    <div class="card-header">
                      <h5 class="card-title f-16">Calender</h5>
                    </div>
                    <div class="card-body pt-0">

                    </div>
                  </div>
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
