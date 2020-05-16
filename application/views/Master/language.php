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
            <h4>Language</h4>
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

            <!-- Language -->
            <div class="row">
              <div class="col-md-5">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"><?php if(isset($language_info)){ echo 'Update'; } else{ echo 'Add New'; } ?> Language</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-12">
                        <label>Language</label>
                        <input type="text" class="form-control form-control-sm" name="language_name" id="language_name" value="<?php if(isset($language_info)){ echo $language_info['language_name']; } ?>" placeholder="Language" required>
                      </div>
                      <div class="form-group col-md-12 text-right m-0">
                        <?php if(isset($language_info)){ ?>
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
                    <h5 class="card-title f-16">List All Language</h5>
                  </div>
                  <div class="card-body pt-0">

                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Language</th>
                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($language_list as $list) { $i++; ?>
                          <tr>
                            <td style="display:none;"><?php echo $i; ?></td>
                            <td><?php echo $list->language_name; ?></td>
                            <td>
                              <div class="btn-group">
                                <a href="edit_language/<?php echo $list->language_id; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                                <a href="delete_language/<?php echo $list->language_id; ?>" class="btn btn-sm btn-default" onclick="return confirm('Delete this Language');" ><i class="fa fa-trash text-danger"></i></a>
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
            <!-- // Language -->



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
