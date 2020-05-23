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
      <a class="nav-link" href="<?php echo base_url(); ?>User/logout">
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
          <a href="<?php echo base_url(); ?>User/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Company
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/company_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Company Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/branch_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Branch Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/unit_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/party_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Party / Vendor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_contract_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Contract</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/group_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Group Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/user_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/issue_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Issue Information</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/education_level" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Master Pages</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/custom_fields" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Custom Fields</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/database_backup" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Database Backup</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/email_template" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Email Templates</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Profile
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Profile/bank_account" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bank Account </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Profile/change_password" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Change Password</p>
              </a>
            </li>


          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Assets
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Assets/assets_category" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Assets Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Assets/assets" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Assets</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Ticket
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Ticket/ticket" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ticket</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>
              Payroll
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Payroll/payslip" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payslip</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Performance
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Performance/goal_tracking" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Goal Tracking</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Performance/goal_type" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Goal Type</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Performance/performance_appraisal" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Performance Appraisal</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Performance/performance_indicator" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Performance Indicator</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Payment Gateway
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Payment_Gateway/payment_gateway" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payment Gateway</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Quote Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Quote/time_log" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Time log</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Quote/estimates" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Estimates</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Quote/projects" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quoted Projects</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Quote/clients" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Clients</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Quote/leads" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Leads</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Quote/estimate" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Estimate</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Quote/calender" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Estimate Calender</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              HR Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/account_statement" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Account Statement</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/attendance" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Attendance Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/employees_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Employees Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/expense_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Expense Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/income_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Income Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/project_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/training_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Training Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/transfer_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transfer Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/user_role_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Roles Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/payslip_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payslip Report</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>HR_Report/task_report" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Task Report</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-file"></i>
            <p>
              File Manager
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>File_Manager/all_documents" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Documents</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Finance
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/account_balance" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Account Balance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/account" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Account </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/expense" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Expense </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/deposit" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Deposit </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/transfer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transfer </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/payee" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payees </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/payer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>payers </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/payslip" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payslip History </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Finance/transaction" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Transaction </p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Project Management
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/task_category" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Task Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/task" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Task</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/tax_type" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tax Type</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/time_log" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Time Logs</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/invoice_payment" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice Payment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/invoice_calender" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice Calender</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/projects" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Project_Mgmt/invoice" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice</p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Staff
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Staff/employee" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Staff/emp_last_login" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Last Login</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Staff/employee_exit" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Employees Exit</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Staff/expired_document" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Expired Document</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Staff/privileges" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Role & Privileges</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Events And Meeting
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Events/events" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Events/meeting" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Meeting</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Training
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Training/trainers" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Trainers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Training/training" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Training</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Training/training_type" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Training Type</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Timesheet
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/date_attendance" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Date Wise Attendance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/leave_status" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Leave Status</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/holiday" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Holiday</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/leave" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Leave</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/monthly_attendance" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Monthly Attendance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/office_shift" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Office Shift</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/overtime_request" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Overtime Request</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Timesheet/calender" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Calender</p>
              </a>
            </li>

          </ul>
        </li>



        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Organization
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/announcements" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Announcements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/company" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Company</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/policies" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Policies</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/dapartments" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Departments</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/designations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Designations</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/location" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Location</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/documents" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Official Documents</p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              CORE HR
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/award" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Awards</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/complaints" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Complaints</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/transfers" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transfers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/resignations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Resignations</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/terminations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Terminations</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/warning" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Warning</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/travels" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Travels</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/pramotions" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pramotions</p>
              </a>
            </li>

          </ul>
        </li>

         <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Transaction
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/lead_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lead Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/project_contract_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Contract</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/task_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Task Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/ticket_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ticket Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/attendence_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Attendence</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/receipt_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Receipt</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lead Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Register</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Task Register</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ticket Register </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Attendence Register </p>
              </a>
            </li>
          </ul>
        </li>
      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
