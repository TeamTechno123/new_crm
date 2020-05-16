<!DOCTYPE html>
<html>
<?php
$page = "make_information_list";
?>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>Brnch Information</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-list"></i> List Branch Information</h3>
                <div class="card-tools">
                  <a href="<?php echo base_url(); ?>User/branch_information" class="btn btn-sm btn-block btn-primary">Add Branch</a>
                </div>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>Brnch Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th class="wt_50">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  foreach ($branch_list as $list) {
                    $i++;
                  ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $list->branch_name; ?></td>
                      <td><?php echo $list->branch_mob1; ?></td>
                      <td><?php echo $list->branch_email; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>User/edit_branch/<?php echo $list->branch_id; ?>"> <i class="fa fa-edit"></i> </a>
                        <a href="<?php echo base_url(); ?>User/delete_branch/<?php echo $list->branch_id; ?>" onclick="return confirm('Delete this Information');" class="ml-4"> <i class="fa fa-trash text-danger"></i> </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.info('Updated successfully');
    });
  <?php } ?>
  </script>
</body>
</html>
