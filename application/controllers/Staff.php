<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }

  public function employee(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/employee');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_employee($employee_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/employee');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_employee($employee_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('employee_id', $employee_id, 'employee');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Staff/employee');
  }

  public function emp_last_login(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/emp_last_login');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_emp_last_login($emp_last_login_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/emp_last_login');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_emp_last_login($emp_last_login_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('emp_last_login_id', $emp_last_login_id, 'emp_last_login');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Staff/emp_last_login');
  }


  public function employee_exit(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/employee_exit');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_employee_exit($employee_exit_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/employee_exit');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_employee_exit($employee_exit_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('employee_exit_id', $employee_exit_id, 'employee_exit');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Staff/employee_exit');
  }


  public function expired_document(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/expired_document');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_expired_document($expired_document_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/expired_document');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_expired_document($expired_document_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('expired_document_id', $expired_document_id, 'expired_document');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Staff/expired_document');
  }

  public function immigration(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/immigration');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_immigration($immigration_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/immigration');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_immigration($immigration_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('immigration_id', $immigration_id, 'immigration');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Staff/immigration');
  }

  public function official_document(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/official_document');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_official_document($official_document_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Staff/official_document');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_official_document($official_document_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('official_document_id', $official_document_id, 'official_document');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Staff/official_document');
      }

    public function assets_warranty(){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Staff/assets_warranty');
      $this->load->view('Include/footer');
    }

    // Edit/Update Education Level...
    public function edit_assets_warranty($assets_warranty_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Staff/assets_warranty');
      $this->load->view('Include/footer');
    }

    //Delete Education Level...
    public function delete_assets_warranty($assets_warranty_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
      $this->User_Model->delete_info('assets_warranty_id', $assets_warranty_id, 'assets_warranty');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Staff/assets_warranty');
    }

    public function privileges(){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Staff/privileges');
      $this->load->view('Include/footer');
    }

    // Edit/Update Education Level...
    public function edit_privileges($privileges_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Staff/privileges');
      $this->load->view('Include/footer');
    }

    //Delete Education Level...
    public function delete_privileges($privileges_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
      $this->User_Model->delete_info('privileges_id', $privileges_id, 'privileges');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Staff/privileges');
    }








}
?>
