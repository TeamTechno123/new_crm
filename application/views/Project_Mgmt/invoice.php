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
            <h4>Invoice</h4>
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
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"> Add New Invoice</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-3">
                        <label>Invoice No.</label>
                        <input type="text" class="form-control form-control-sm" name="invoice_no" id="invoice_no" value="" placeholder="Invoice No." required>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Project</label>
                        <select class="form-control select2" name="project" id="project" data-placeholder="Project">
                          <option value="">Project</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3">
                        <label>Invoice Date</label>
                        <input type="text" class="form-control form-control-sm" name="invoice_date" id="invoice_date" value="" placeholder="Invoice Date" required>
                      </div>

                      <div class="form-group col-md-3">
                        <label>Due Date</label>
                        <input type="text" class="form-control form-control-sm" name="due_date" id="due_date" value="" placeholder="Due Date" required>
                      </div>

                      <div class="form-group col-md-12 text-right">
                      <button type="button" id="add_row" class="btn btn-sm btn-primary">Add Row</button>
                    </div>
                    <div class="form-group col-md-12">
                      <table id="myTable" class="table table-bordered tbl_list">
                        <thead>
                        <tr>
                          <th>Item</th>
                          <th class="wt_150">Tax Type</th>
                          <th>Tax Rate</th>
                          <th class="wt_100">Qty/Hr</th>
                          <th class="wt_100">Unit Price</th>
                          <th class="wt_100">Sub Total</th>
                          <th class="wt_50"></th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="wt_150">
                              <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>
                            </td>
                            <td>
                              <select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Type">
                                <option value="">Select Type</option>
                                <option >1</option>
                                <option >2</option>
                                <option >3</option>
                              </select>
                            </td>
                            <td class="wt_150">
                              <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>
                            </td>

                            <td class="wt_100">
                              <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>
                            </td>
                            <td class="wt_100">
                              <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>
                            </td>
                            <td class="wt_100">
                              <input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>
                            </td>
                            <td class="wt_50"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>


                      <div class="form-group col-md-12 text-right m-0">

                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>

                          <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>

                      </div>
                    </div>
                  </form>
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

<script type="text/javascript">
  // Add Row...
  <?php if(isset($update)){ ?>
  var i = <?php echo $i-1; ?>
  <?php } else { ?>
  var i = 1;
  <?php } ?>

  $('#add_row').click(function(){
    i++;
    var row = ''+
    '<tr>'+
    '<td class="wt_150">'+
      '<input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>'+
    '</td>'+
      '<td>'+
        '<select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Type">'+
          '<option value="">Select Type</option>'+
          '<option >1</option>'+
          '<option >2</option>'+
          '<option >3</option>'+
        '</select>'+
      '</td>'+
      '<td class="wt_150">'+
        '<input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>'+
      '</td>'+

      '<td class="wt_100">'+
        '<input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>'+
      '</td>'+
      '<td class="wt_100">'+
        '<input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>'+
      '</td>'+
      '<td class="wt_100">'+
        '<input type="text" class="form-control form-control-sm" name="stock_no" id="stock_no" value="" placeholder="" required>'+
      '</td>'+
      '<td class="wt_50"><a class="rem_row"><i class="fa fa-trash text-danger"></i></a></td>'+
    '</tr>';
    $('#myTable').append(row);
  });

  $('#myTable').on('click', '.rem_row', function () {
   $(this).closest('tr').remove();
 });
  </script>
