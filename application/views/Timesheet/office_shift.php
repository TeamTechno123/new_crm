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
            <h4>Office Shift</h4>
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
                <h3 class="card-title">Add New Office Shift</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New </button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-6 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company_id" id="company_id" data-placeholder="Choose an Company">
                          <option value="">Choose an Company</option>
                        </select>
                      </div>



                      <div class="form-group col-md-6 select_sm">
                        <label>Shift Name</label>
                        <input type="text" class="form-control form-control-sm" name="shift_name" id="shift_name"  placeholder="Shift Name" required>
                      </div>

                      <div class="col-md-12 mt-3">
                        <div class="row">
                          <div class="form-group col-md-2">
                            <label>Monday</label>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="in_time" id="in_time" value="" placeholder="In Time" required>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="out_time" id="out_time" value="" placeholder="Out Time" required>
                          </div>

                          <div class="form-group col-md-2 text-right ">
                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Clear</button>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label>Tuesday</label>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="in_time" id="in_time" value="" placeholder="In Time" required>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="out_time" id="out_time" value="" placeholder="Out Time" required>
                          </div>

                          <div class="form-group col-md-2 text-right ">
                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Clear</button>
                          </div>
                        </div>


                        <div class="row">
                          <div class="form-group col-md-2">
                            <label>Wednesday</label>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="in_time" id="in_time" value="" placeholder="In Time" required>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="out_time" id="out_time" value="" placeholder="Out Time" required>
                          </div>

                          <div class="form-group col-md-2 text-right ">
                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Clear</button>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label>Thursday</label>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="in_time" id="in_time" value="" placeholder="In Time" required>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="out_time" id="out_time" value="" placeholder="Out Time" required>
                          </div>

                          <div class="form-group col-md-2 text-right ">
                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Clear</button>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-2">
                            <label>Friday</label>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="in_time" id="in_time" value="" placeholder="In Time" required>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="out_time" id="out_time" value="" placeholder="Out Time" required>
                          </div>

                          <div class="form-group col-md-2 text-right ">
                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Clear</button>
                          </div>
                        </div>


                        <div class="row">
                          <div class="form-group col-md-2">
                            <label>Saturday</label>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="in_time" id="in_time" value="" placeholder="In Time" required>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="out_time" id="out_time" value="" placeholder="Out Time" required>
                          </div>

                          <div class="form-group col-md-2 text-right ">
                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Clear</button>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-2">
                            <label>Sunday</label>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="in_time" id="in_time" value="" placeholder="In Time" required>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="text" class="form-control form-control-sm" name="out_time" id="out_time" value="" placeholder="Out Time" required>
                          </div>

                          <div class="form-group col-md-2 text-right ">
                            <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Clear</button>
                          </div>
                        </div>

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
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">List All Office Shift </h5>
                  </div>
                  <div class="card-body pt-0">
                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Company</th>
                        <th>Day</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>

                          <tr>
                            <td style="display:none;"></td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
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
