<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }


  public function dashboard(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/dashboard');
    $this->load->view('Include/footer');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'User');
  }


  public function projects(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/projects');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_projects($projects_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/projects');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_projects($projects_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('projects_id', $projects_id, 'projects');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Client/projects');
  }

  public function task(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/task');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_task($task_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/task');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_task($task_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('task_id', $task_id, 'task');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Client/task');
  }


  public function invoice(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/invoice');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_invoice($invoice_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/invoice');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_invoice($invoice_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('invoice_id', $invoice_id, 'invoice');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Client/invoice');
  }

  public function invoice_payment(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/invoice_payment');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_invoice_payment($invoice_payment_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/invoice_payment');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_invoice_payment($invoice_payment_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('invoice_payment_id', $invoice_payment_id, 'invoice_payment');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Client/invoice_payment');
  }


  public function basic_information(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/basic_information');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_basic_information($basic_information_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/basic_information');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_basic_information($basic_information_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('basic_information_id', $basic_information_id, 'basic_information');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Client/basic_information');
  }

  public function change_password(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/change_password');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_change_password($change_password_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Client/navbar');
    $this->load->view('Client/change_password');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_change_password($change_password_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('change_password_id', $change_password_id, 'change_password');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Client/change_password');
  }




}
?>
