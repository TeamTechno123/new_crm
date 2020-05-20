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
            <h4>Leave Status</h4>
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
                      <div class="form-group col-md-4 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Choose an Company">
                          <option value="">Choose an Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4 select_sm">
                        <label>Status</label>
                        <select class="form-control select2" name="status" id="status" data-placeholder="Choose an Status">
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
              <div class="col-md-4">
                <div class="card card-default p-0">
                  <div class="card-header">
                    <h5 class="card-title f-16">Add New Holiday</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">

                      <div class="form-group col-md-12 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Choose an Company">
                          <option value="">Choose an Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Event Name</label>
                        <input type="text" class="form-control form-control-sm" name="event_name" id="event_name" value="" placeholder="Event Name" required>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Start Date</label>
                        <input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="" placeholder="Start Date" required>
                      </div>

                      <div class="form-group col-md-6">
                        <label>End Date</label>
                        <input type="text" class="form-control form-control-sm" name="e_date" id="e_date" value="" placeholder="End Date" required>
                      </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Discription</label>
                        <textarea class="form-control" name="name" rows="2" cols="85"></textarea>
                        </div>


                      <div class="form-group col-md-12 select_sm">
                        <label>Status</label>
                        <select class="form-control select2" name="status" id="status" data-placeholder="Choose an Status">
                          <option value="">Choose an Status</option>
                        </select>
                      </div>


                      <div class="form-group col-md-12 text-right m-0">

                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Get</button>



                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">List All Leave Reports</h5>
                  </div>
                  <div class="card-body pt-0">

                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Event Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
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
