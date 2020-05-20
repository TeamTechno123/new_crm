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
            <h4>Project</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Not Started</span>
                <span class="info-box-number">0</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">In Progress</span>
                <span class="info-box-number">10</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Completed</span>
                <span class="info-box-number">15</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-comments"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Deferred</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Add New Project</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">

                      <div class="form-group col-md-6 select_sm">
                        <div class="row">

                          <div class="form-group col-md-6 select_sm">
                            <label>Title </label>
                            <input type="text" class="form-control form-control-sm" name="project_title" id="project_title"  placeholder="Title " required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Project No. </label>
                            <input type="text" class="form-control form-control-sm" name="project_no" id="project_no"  placeholder="Project No. " required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>P. O. No. </label>
                            <input type="text" class="form-control form-control-sm" name="po_no" id="po_no"  placeholder="P. O. No." required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Phase No. </label>
                            <input type="text" class="form-control form-control-sm" name="phase_no" id="phase_no"  placeholder="Phase No." required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Client</label>
                            <select class="form-control select2" name="client_id" id="client_id" data-placeholder="Client">
                              <option value="">Client</option>
                            </select>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Company </label>
                            <input type="text" class="form-control form-control-sm" name="company" id="company"  placeholder="Company" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Start Date</label>
                            <input type="text" class="form-control form-control-sm" name="s_date" id="s_date"  placeholder="Start Date" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>End Date</label>
                            <input type="text" class="form-control form-control-sm" name="e_date" id="e_date"  placeholder="End Date" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Budget Hours</label>
                            <input type="text" class="form-control form-control-sm" name="budget_hours" id="budget_hours"  placeholder="Budget Hours" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Priority</label>
                            <select class="form-control select2" name="title" id="title" data-placeholder="Priority">
                              <option value="">Priority</option>
                            </select>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>Project Members</label>
                            <input type="text" class="form-control form-control-sm" name="project_members" id="project_members"  placeholder="Project Members" required>
                          </div>

                        </div>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <div class="row">
                          <div class="form-group col-md-12 select_sm">
                            <div class="mb-3">
                              <label>Description</label>
                                <textarea class="textarea" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                      </div>
                        <div class="form-group col-md-12 select_sm">
                          <label>Summary</label>
                        <textarea class="form-control form-control-sm" name="name" rows="2" cols="80"></textarea>
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
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">List All Project</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Project </th>
                    <th>Phase No.</th>
                    <th>Project Summary</th>
                    <th>Priority</th>
                    <th>Project Members</th>
                    <th>Progress</th>
                    <th>Date</th>
                    <th>Progress</th>
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
