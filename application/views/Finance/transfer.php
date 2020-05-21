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
            <h4>Transfer</h4>
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
                      <div class="form-group col-md-6 select_sm">
                        <div class="row">
                          <div class="form-group col-md-6 select_sm">
                            <label>From Account</label>
                            <select class="form-control select2" name="from_account" id="from_account" data-placeholder="From Account">
                              <option value="">From Account</option>
                            </select>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>To Account</label>
                            <select class="form-control select2" name="to_account" id="to_account" data-placeholder="To Account">
                              <option value="">To Account</option>
                            </select>
                          </div>

                        <div class="form-group col-md-6 select_sm">
                          <label>Date</label>
                          <input type="text" class="form-control form-control-sm" name="date" id="date"  placeholder="Date" required>
                        </div>

                        <div class="form-group col-md-6 select_sm">
                          <label>Amount</label>
                          <input type="text" class="form-control form-control-sm" name="amount" id="amount"  placeholder="Amount" required>
                        </div>

                        <div class="form-group col-md-6 select_sm">
                          <label>Payment Methode  </label>
                          <select class="form-control select2" name="payment_methode" id="payment_methode" data-placeholder="Payment Methode  ">
                            <option value="">Payment Methode  </option>
                          </select>
                        </div>


                        <div class="form-group col-md-6 select_sm">
                        <label>Ref##</label>
                        <input type="text" class="form-control form-control-sm" name="ref" id="ref"  placeholder="Transaction Id, Cheque No. " required>
                      </div>

                    </div>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <div class="row">
                      <div class="form-group col-md-12 select_sm">
                        <label>Discription</label>
                        <textarea class="form-control" name="name" rows="4" cols="85"></textarea>
                        </div>
                    </div>
                  </div>

                  </div>


                      <div class="form-group col-md-12 text-right ">

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
