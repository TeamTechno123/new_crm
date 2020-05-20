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
            <h4>Documents</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <?php include('side_panel.php') ?>
          </div>
          <div class="col-md-9">

            <!-- Documents -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"> Documents</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">



                        <div class="form-group col-md-6 select_sm">
                          <label>Document Type</label>
                          <select class="form-control select2" name="document_type" id="document_type" data-placeholder="Choose Document Type ">
                            <option value="">Document Type</option>
                          </select>
                        </div>

                        <div class="form-group col-md-6">
                          <label>Date Of Expiry</label>
                          <input type="text" class="form-control form-control-sm" name="expiry_date" id="expiry_date" value="" placeholder="Date Of Expiry" required>
                        </div>
                        <div class="form-group col-md-12">
                          <label>Document Title</label>
                          <input type="text" class="form-control form-control-sm" name="document_title" id="document_title" value="" placeholder="Document Title" required>
                        </div>

                        <div class="form-group col-md-12">
                          <label>Notification Mail</label>
                          <input type="text" class="form-control form-control-sm" name="email" id="email" value="" placeholder="Notification Mail" required>
                        </div>

                        <div class="form-group col-md-12">
                          <label>Document No.</label>
                          <input type="email" class="form-control form-control-sm" name="document_no" id="document_no" value="" placeholder="Document No." required>
                        </div>

                        <div class="form-group col-md-6 select_sm">
                          <label>Description</label>
                        <textarea class="form-control form-control-sm" name="description" rows="3" cols="80"></textarea>
                        </div>

                        <div class="form-group col-md-6 select_sm">
                          <label>Document File</label>
                          <input type="file" name="" value="">
                        </div>

                        <div class="form-group col-md-6 select_sm">
                          <label>Send Notification Mail When Expired </label>
                          <select class="form-control select2" name="document_type" id="document_type" data-placeholder="Send Notification Mail When Expired  ">
                            <option value="">Send Notification Mail When Expired </option>
                          </select>
                        </div>

                      <div class="form-group col-md-12 text-right m-0">

                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>

                          <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>

                      </div>
                    </div>
                  </form>
                </div>

                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">List All Documents </h5>
                  </div>
                  <div class="card-body pt-0">

                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Document Type</th>
                        <th>Document Title</th>
                        <th>Expiry Date </th>

                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>

                          <tr>
                            <td style="display:none;"></td>
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
            <!-- // Documents -->



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
