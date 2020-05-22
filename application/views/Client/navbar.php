<?php
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_role_id = $this->session->userdata('crm_role_id');
  $company_info = $this->User_Model->get_info_arr_fields('company_name','company_id', $crm_company_id, 'company');
  $user_info = $this->User_Model->get_info_arr_fields('user_name','user_id', $crm_user_id, 'user');
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Client/logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $company_info[0]['company_name']; ?></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user_info[0]['user_name']; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Client/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Client/projects" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Projects
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Client/task" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Task
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Client/invoice" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Invoice
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Client/invoice_payment" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Invoice Payment
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Client/change_password" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Change Password
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>Client/logout" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p>
              Logout
            </p>
          </a>
        </li>

      </ul>
      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
