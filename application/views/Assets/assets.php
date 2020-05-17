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
            <h4>Assets</h4>
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
                <h3 class="card-title">Add New Assets</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-3 select_sm">
                        <label>Category</label>
                        <select class="form-control select2" name="category_id" id="category_id" data-placeholder="Category">
                          <option value="">Category</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Asset Name</label>
                        <input type="text" class="form-control form-control-sm" name="date" id="date"  placeholder="Asset Name" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Company Asset Code</label>
                        <input type="text" class="form-control form-control-sm" name="date" id="date"  placeholder="Company Asset Code" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Is Working</label>
                        <select class="form-control select2" name="working_condition" id="working_condition" data-placeholder="Is Working">
                          <option value="">Is Working</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Company">
                          <option value="">Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Assign To </label>
                        <select class="form-control select2" name="employee" id="employee" data-placeholder="Choose an Employee">
                          <option value="">Choose an Employee</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Purchase Date</label>
                        <input type="text" class="form-control form-control-sm" name="p_date" id="p_date"  placeholder="Purchase Date" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Invoice No.</label>
                        <input type="text" class="form-control form-control-sm" name="invoice_no" id="invoice_no"  placeholder="Invoice No." required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Manuacturer</label>
                        <input type="text" class="form-control form-control-sm" name="manuacturer" id="manuacturer"  placeholder="Manuacturer" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Serial No.</label>
                        <input type="text" class="form-control form-control-sm" name="serial_no" id="serial_no"  placeholder="Serial No." required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Warrent / AMC End Date</label>
                        <input type="text" class="form-control form-control-sm" name="serial_no" id="serial_no"  placeholder="Warrent / AMC End Date" required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Award Photo</label>
                        <input type="file" name="" value="">
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
                <h3 class="card-title">List All Custom Fields</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Assets Name</th>
                    <th>Category</th>
                    <th>Asset Code</th>
                    <th>Is Working </th>
                    <th>Assign To </th>
                    <th>Company</th>
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
