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
            <h4>Payment Gateway Information</h4>
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
                    <h5 class="card-title f-16"> Add New Payment Gateway</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-12">
                        <label>Paypal Email</label>
                        <input type="text" class="form-control form-control-sm" name="email" id="email" value="" placeholder="Paypal Email" required>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Paypal Sandbox</label>
                        <select class="form-control select2" name="sandbox" id="sandbox" data-placeholder="Paypal Sandbox">
                          <option value="">Paypal Sandbox</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Active</label>
                        <select class="form-control select2" name="active" id="active" data-placeholder="Active">
                          <option value="">Active</option>
                        </select>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Paypal IPN URL</label>
                        <input type="text" class="form-control form-control-sm" name="ipn_url" id="ipn_url" value="" placeholder="Paypal IPN URL" required>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Stripe Information</label>
                        <input type="text" class="form-control form-control-sm" name="stripe_info" id="stripe_info" value="" placeholder="Stripe Information" required>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Stripe Secret Key</label>
                        <input type="text" class="form-control form-control-sm" name="stripe_secret_key" id="stripe_secret_key" value="" placeholder="Stripe Secret Key" required>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Stripe Publishable Key</label>
                        <input type="text" class="form-control form-control-sm" name="stripe_publishable_key" id="stripe_publishable_key" value="" placeholder="Stripe Publishable Key" required>
                      </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Active</label>
                        <select class="form-control select2" name="active2" id="active2" data-placeholder="Active">
                          <option value="">Active</option>
                        </select>
                      </div>

                    <div class="form-group col-md-12 select_sm text-center">
                      <label>Online Payment Received Amount</label>
                      <hr>
                    </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Account</label>
                        <select class="form-control select2" name="account" id="account" data-placeholder="Account">
                          <option value="">Account</option>
                        </select>
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
