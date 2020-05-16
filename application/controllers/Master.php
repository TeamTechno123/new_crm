<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }

/*************************************** Education Level *************************************/
  // Add Education Level...
  public function education_level(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('education_level_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['education_level_addedby'] = $crm_user_id;
      $save_data['education_level_date'] = date('d-m-Y');
      $save_data['education_level_time'] = date('h:i:s A');
      $this->User_Model->save_data('education_level', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/education_level');
    }

    $data['education_level_list'] = $this->User_Model->get_list_by_id('','','','','education_level_id','ASC','education_level');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/education_level', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Education Level...
  public function edit_education_level($education_level_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('education_level_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['education_level_addedby'] = $crm_user_id;
      $update_data['education_level_date'] = date('d-m-Y');
      $update_data['education_level_time'] = date('h:i:s A');
      $this->User_Model->update_info('education_level_id', $education_level_id, 'education_level', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/education_level');
    }
    $data['education_level_list'] = $this->User_Model->get_list_by_id('','','','','education_level_id','ASC','education_level');

    $education_level_info = $this->User_Model->get_info_arr('education_level_id',$education_level_id,'education_level');
    if(!$education_level_info){ header('location:'.base_url().'Master/education_level'); }
    $data['education_level_info'] = $education_level_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/education_level', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Education Level...
  public function delete_education_level($education_level_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('education_level_id', $education_level_id, 'education_level');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/education_level');
  }


/*************************************** Language *************************************/
  // Add Language...
  public function language(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('language_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['language_addedby'] = $crm_user_id;
      $save_data['language_date'] = date('d-m-Y');
      $save_data['language_time'] = date('h:i:s A');
      $this->User_Model->save_data('language', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/language');
    }

    $data['language_list'] = $this->User_Model->get_list_by_id('','','','','language_id','ASC','language');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/language', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Language...
  public function edit_language($language_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('language_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['language_addedby'] = $crm_user_id;
      $update_data['language_date'] = date('d-m-Y');
      $update_data['language_time'] = date('h:i:s A');
      $this->User_Model->update_info('language_id', $language_id, 'language', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/language');
    }
    $data['language_list'] = $this->User_Model->get_list_by_id('','','','','language_id','ASC','language');

    $language_info = $this->User_Model->get_info_arr('language_id',$language_id,'language');
    if(!$language_info){ header('location:'.base_url().'Master/language'); }
    $data['language_info'] = $language_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/language', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Language...
  public function delete_language($language_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('language_id', $language_id, 'language');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/language');
  }

/********************************* Skill ************************************/

  // Add Skill...
  public function skill(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('skill_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['skill_addedby'] = $crm_user_id;
      $save_data['skill_date'] = date('d-m-Y');
      $save_data['skill_time'] = date('h:i:s A');
      $this->User_Model->save_data('skill', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/skill');
    }

    $data['skill_list'] = $this->User_Model->get_list_by_id('','','','','skill_id','ASC','skill');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/skill', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Skill...
  public function edit_skill($skill_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('skill_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['skill_addedby'] = $crm_user_id;
      $update_data['skill_date'] = date('d-m-Y');
      $update_data['skill_time'] = date('h:i:s A');
      $this->User_Model->update_info('skill_id', $skill_id, 'skill', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/skill');
    }
    $data['skill_list'] = $this->User_Model->get_list_by_id('','','','','skill_id','ASC','skill');

    $skill_info = $this->User_Model->get_info_arr('skill_id',$skill_id,'skill');
    if(!$skill_info){ header('location:'.base_url().'Master/skill'); }
    $data['skill_info'] = $skill_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/skill', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Skill...
  public function delete_skill($skill_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('skill_id', $skill_id, 'skill');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/skill');
  }
/*************************************** Contract Type *************************************/
  // Add Contract Type...
  public function contract_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('contract_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['contract_type_addedby'] = $crm_user_id;
      $save_data['contract_type_date'] = date('d-m-Y');
      $save_data['contract_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('contract_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/contract_type');
    }

    $data['contract_type_list'] = $this->User_Model->get_list_by_id('','','','','contract_type_id','ASC','contract_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/contract_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Contract Type...
  public function edit_contract_type($contract_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('contract_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['contract_type_addedby'] = $crm_user_id;
      $update_data['contract_type_date'] = date('d-m-Y');
      $update_data['contract_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('contract_type_id', $contract_type_id, 'contract_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/contract_type');
    }
    $data['contract_type_list'] = $this->User_Model->get_list_by_id('','','','','contract_type_id','ASC','contract_type');

    $contract_type_info = $this->User_Model->get_info_arr('contract_type_id',$contract_type_id,'contract_type');
    if(!$contract_type_info){ header('location:'.base_url().'Master/contract_type'); }
    $data['contract_type_info'] = $contract_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/contract_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Contract Type...
  public function delete_contract_type($contract_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('contract_type_id', $contract_type_id, 'contract_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/contract_type');
  }

/************************************** Document Type ***********************************/
  // Add Document Type...
  public function document_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('document_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['document_type_addedby'] = $crm_user_id;
      $save_data['document_type_date'] = date('d-m-Y');
      $save_data['document_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('document_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/document_type');
    }

    $data['document_type_list'] = $this->User_Model->get_list_by_id('','','','','document_type_id','DESC','document_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/document_type', $data);
    $this->load->view('Include/footer', $data);
  }


  // Edit/Update Document Type...
  public function edit_document_type($document_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('document_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['document_type_addedby'] = $crm_user_id;
      $update_data['document_type_date'] = date('d-m-Y');
      $update_data['document_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('document_type_id', $document_type_id, 'document_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/document_type');
    }
    $data['document_type_list'] = $this->User_Model->get_list_by_id('','','','','document_type_id','ASC','document_type');

    $document_type_info = $this->User_Model->get_info_arr('document_type_id',$document_type_id,'document_type');
    if(!$document_type_info){ header('location:'.base_url().'Master/document_type'); }
    $data['document_type_info'] = $document_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/document_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Document Type...
  public function delete_document_type($document_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('document_type_id', $document_type_id, 'document_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/document_type');
  }

/************************************** Award Type ***********************************/

  // Add Award Type...
  public function award_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('award_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['award_type_addedby'] = $crm_user_id;
      $save_data['award_type_date'] = date('d-m-Y');
      $save_data['award_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('award_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/award_type');
    }

    $data['award_type_list'] = $this->User_Model->get_list_by_id('','','','','award_type_id','ASC','award_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/award_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Document Type...
  public function edit_award_type($award_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('award_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['award_type_addedby'] = $crm_user_id;
      $update_data['award_type_date'] = date('d-m-Y');
      $update_data['award_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('award_type_id', $award_type_id, 'award_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/award_type');
    }
    $data['award_type_list'] = $this->User_Model->get_list_by_id('','','','','award_type_id','ASC','award_type');

    $award_type_info = $this->User_Model->get_info_arr('award_type_id',$award_type_id,'award_type');
    if(!$award_type_info){ header('location:'.base_url().'Master/award_type'); }
    $data['award_type_info'] = $award_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/award_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Document Type...
  public function delete_award_type($award_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('award_type_id', $award_type_id, 'award_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/award_type');
  }

/**************************************** Religion *************************************/

  // Add Religion...
  public function religion(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('religion_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['religion_addedby'] = $crm_user_id;
      $save_data['religion_date'] = date('d-m-Y');
      $save_data['religion_time'] = date('h:i:s A');
      $this->User_Model->save_data('religion', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/religion');
    }

    $data['religion_list'] = $this->User_Model->get_list_by_id('','','','','religion_id','ASC','religion');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/religion', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Religion...
  public function edit_religion($religion_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('religion_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['religion_addedby'] = $crm_user_id;
      $update_data['religion_date'] = date('d-m-Y');
      $update_data['religion_time'] = date('h:i:s A');
      $this->User_Model->update_info('religion_id', $religion_id, 'religion', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/religion');
    }
    $data['religion_list'] = $this->User_Model->get_list_by_id('','','','','religion_id','ASC','religion');

    $religion_info = $this->User_Model->get_info_arr('religion_id',$religion_id,'religion');
    if(!$religion_info){ header('location:'.base_url().'Master/religion'); }
    $data['religion_info'] = $religion_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/religion', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Religion...
  public function delete_religion($religion_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('religion_id', $religion_id, 'religion');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/religion');
  }

/************************************** Leave Type ****************************************/

  // Add Leave Type...
  public function leave_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('leave_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['leave_type_addedby'] = $crm_user_id;
      $save_data['leave_type_date'] = date('d-m-Y');
      $save_data['leave_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('leave_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/leave_type');
    }

    $data['leave_type_list'] = $this->User_Model->get_list_by_id('','','','','leave_type_id','ASC','leave_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/leave_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Leave Type...
  public function edit_leave_type($leave_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('leave_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['leave_type_addedby'] = $crm_user_id;
      $update_data['leave_type_date'] = date('d-m-Y');
      $update_data['leave_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('leave_type_id', $leave_type_id, 'leave_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/leave_type');
    }
    $data['leave_type_list'] = $this->User_Model->get_list_by_id('','','','','leave_type_id','ASC','leave_type');

    $leave_type_info = $this->User_Model->get_info_arr('leave_type_id',$leave_type_id,'leave_type');
    if(!$leave_type_info){ header('location:'.base_url().'Master/leave_type'); }
    $data['leave_type_info'] = $leave_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/leave_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Leave Type...
  public function delete_leave_type($leave_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('leave_type_id', $leave_type_id, 'leave_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/leave_type');
  }

/******************************************* Warning Type ***************************************/

  // Add Warning Type
  public function warning_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('warning_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['warning_type_addedby'] = $crm_user_id;
      $save_data['warning_type_date'] = date('d-m-Y');
      $save_data['warning_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('warning_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/warning_type');
    }

    $data['warning_type_list'] = $this->User_Model->get_list_by_id('','','','','warning_type_id','ASC','warning_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/warning_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Warning Type...
  public function edit_warning_type($warning_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('warning_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['warning_type_addedby'] = $crm_user_id;
      $update_data['warning_type_date'] = date('d-m-Y');
      $update_data['warning_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('warning_type_id', $warning_type_id, 'warning_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/warning_type');
    }
    $data['warning_type_list'] = $this->User_Model->get_list_by_id('','','','','warning_type_id','ASC','warning_type');

    $warning_type_info = $this->User_Model->get_info_arr('warning_type_id',$warning_type_id,'warning_type');
    if(!$warning_type_info){ header('location:'.base_url().'Master/warning_type'); }
    $data['warning_type_info'] = $warning_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/warning_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Warning Type...
  public function delete_warning_type($warning_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('warning_type_id', $warning_type_id, 'warning_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/warning_type');
  }

/************************************** Termination Type ********************************/
  // Add Termination Type...
  public function termination_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('termination_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['termination_type_addedby'] = $crm_user_id;
      $save_data['termination_type_date'] = date('d-m-Y');
      $save_data['termination_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('termination_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/termination_type');
    }

    $data['termination_type_list'] = $this->User_Model->get_list_by_id('','','','','termination_type_id','ASC','termination_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/termination_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Termination Type...
  public function edit_termination_type($termination_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('termination_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['termination_type_addedby'] = $crm_user_id;
      $update_data['termination_type_date'] = date('d-m-Y');
      $update_data['termination_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('termination_type_id', $termination_type_id, 'termination_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/termination_type');
    }
    $data['termination_type_list'] = $this->User_Model->get_list_by_id('','','','','termination_type_id','ASC','termination_type');

    $termination_type_info = $this->User_Model->get_info_arr('termination_type_id',$termination_type_id,'termination_type');
    if(!$termination_type_info){ header('location:'.base_url().'Master/termination_type'); }
    $data['termination_type_info'] = $termination_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/termination_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Termination Type...
  public function delete_termination_type($termination_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('termination_type_id', $termination_type_id, 'termination_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/termination_type');
  }

/**************************************** Expense Type ***************************************/

  // Add Expense Type...
  public function expense_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('expense_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['expense_type_addedby'] = $crm_user_id;
      $save_data['expense_type_date'] = date('d-m-Y');
      $save_data['expense_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('expense_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/expense_type');
    }

    $data['expense_type_list'] = $this->User_Model->get_list_by_id('','','','','expense_type_id','ASC','expense_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/expense_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Termination Type...
  public function edit_expense_type($expense_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('expense_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['expense_type_addedby'] = $crm_user_id;
      $update_data['expense_type_date'] = date('d-m-Y');
      $update_data['expense_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('expense_type_id', $expense_type_id, 'expense_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/expense_type');
    }
    $data['expense_type_list'] = $this->User_Model->get_list_by_id('','','','','expense_type_id','ASC','expense_type');

    $expense_type_info = $this->User_Model->get_info_arr('expense_type_id',$expense_type_id,'expense_type');
    if(!$expense_type_info){ header('location:'.base_url().'Master/expense_type'); }
    $data['expense_type_info'] = $expense_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/expense_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Termination Type...
  public function delete_expense_type($expense_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('expense_type_id', $expense_type_id, 'expense_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/expense_type');
  }

/************************************* Income Type *******************************/
  // Add Income Type
  public function income_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('income_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['income_type_addedby'] = $crm_user_id;
      $save_data['income_type_date'] = date('d-m-Y');
      $save_data['income_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('income_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/income_type');
    }

    $data['income_type_list'] = $this->User_Model->get_list_by_id('','','','','income_type_id','ASC','income_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/income_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Income Type...
  public function edit_income_type($income_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('income_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['income_type_addedby'] = $crm_user_id;
      $update_data['income_type_date'] = date('d-m-Y');
      $update_data['income_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('income_type_id', $income_type_id, 'income_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/income_type');
    }
    $data['income_type_list'] = $this->User_Model->get_list_by_id('','','','','income_type_id','ASC','income_type');

    $income_type_info = $this->User_Model->get_info_arr('income_type_id',$income_type_id,'income_type');
    if(!$income_type_info){ header('location:'.base_url().'Master/income_type'); }
    $data['income_type_info'] = $income_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/income_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Income Type...
  public function delete_income_type($income_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('income_type_id', $income_type_id, 'income_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/income_type');
  }

/**************************************** Job Type **********************************/
  // Add Job Type
  public function job_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('job_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['job_type_addedby'] = $crm_user_id;
      $save_data['job_type_date'] = date('d-m-Y');
      $save_data['job_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('job_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/job_type');
    }

    $data['job_type_list'] = $this->User_Model->get_list_by_id('','','','','job_type_id','ASC','job_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/job_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Job Type...
  public function edit_job_type($job_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('job_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['job_type_addedby'] = $crm_user_id;
      $update_data['job_type_date'] = date('d-m-Y');
      $update_data['job_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('job_type_id', $job_type_id, 'job_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/job_type');
    }
    $data['job_type_list'] = $this->User_Model->get_list_by_id('','','','','job_type_id','ASC','job_type');

    $job_type_info = $this->User_Model->get_info_arr('job_type_id',$job_type_id,'job_type');
    if(!$job_type_info){ header('location:'.base_url().'Master/job_type'); }
    $data['job_type_info'] = $job_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/job_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Job Type...
  public function delete_job_type($job_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('job_type_id', $job_type_id, 'job_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/job_type');
  }

/**************************************** Job Category **************************/

  // Add Job Category...
  public function job_category(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('job_category_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['job_category_addedby'] = $crm_user_id;
      $save_data['job_category_date'] = date('d-m-Y');
      $save_data['job_category_time'] = date('h:i:s A');
      $this->User_Model->save_data('job_category', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/job_category');
    }

    $data['job_category_list'] = $this->User_Model->get_list_by_id('','','','','job_category_id','ASC','job_category');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/job_category', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Job Category...
  public function edit_job_category($job_category_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('job_category_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['job_category_addedby'] = $crm_user_id;
      $update_data['job_category_date'] = date('d-m-Y');
      $update_data['job_category_time'] = date('h:i:s A');
      $this->User_Model->update_info('job_category_id', $job_category_id, 'job_category', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/job_category');
    }
    $data['job_category_list'] = $this->User_Model->get_list_by_id('','','','','job_category_id','ASC','job_category');

    $job_category_info = $this->User_Model->get_info_arr('job_category_id',$job_category_id,'job_category');
    if(!$job_category_info){ header('location:'.base_url().'Master/job_category'); }
    $data['job_category_info'] = $job_category_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/job_category', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Job Category...
  public function delete_job_category($job_category_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('job_category_id', $job_category_id, 'job_category');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/job_category');
  }

/************************************ Travel Arrangement Type *****************************/

  // Add Travel Arrangement Type...
  public function travel_arrangement_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('travel_arrangement_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['travel_arrangement_type_addedby'] = $crm_user_id;
      $save_data['travel_arrangement_type_date'] = date('d-m-Y');
      $save_data['travel_arrangement_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('travel_arrangement_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/travel_arrangement_type');
    }

    $data['travel_arrangement_type_list'] = $this->User_Model->get_list_by_id('','','','','travel_arrangement_type_id','ASC','travel_arrangement_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/travel_arrangement_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Job Category...
  public function edit_travel_arrangement_type($travel_arrangement_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('travel_arrangement_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['travel_arrangement_type_addedby'] = $crm_user_id;
      $update_data['travel_arrangement_type_date'] = date('d-m-Y');
      $update_data['travel_arrangement_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('travel_arrangement_type_id', $travel_arrangement_type_id, 'travel_arrangement_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/travel_arrangement_type');
    }
    $data['travel_arrangement_type_list'] = $this->User_Model->get_list_by_id('','','','','travel_arrangement_type_id','ASC','travel_arrangement_type');

    $travel_arrangement_type_info = $this->User_Model->get_info_arr('travel_arrangement_type_id',$travel_arrangement_type_id,'travel_arrangement_type');
    if(!$travel_arrangement_type_info){ header('location:'.base_url().'Master/travel_arrangement_type'); }
    $data['travel_arrangement_type_info'] = $travel_arrangement_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/travel_arrangement_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Job Category...
  public function delete_travel_arrangement_type($travel_arrangement_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('travel_arrangement_type_id', $travel_arrangement_type_id, 'travel_arrangement_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/travel_arrangement_type');
  }

/*********************************** Employee Exit Type ***********************************/
  // Add Employee Exit Type
  public function employee_exit_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('employee_exit_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['employee_exit_type_addedby'] = $crm_user_id;
      $save_data['employee_exit_type_date'] = date('d-m-Y');
      $save_data['employee_exit_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('employee_exit_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/employee_exit_type');
    }

    $data['employee_exit_type_list'] = $this->User_Model->get_list_by_id('','','','','employee_exit_type_id','ASC','employee_exit_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/employee_exit_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Employee Exit Type...
  public function edit_employee_exit_type($employee_exit_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('employee_exit_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['employee_exit_type_addedby'] = $crm_user_id;
      $update_data['employee_exit_type_date'] = date('d-m-Y');
      $update_data['employee_exit_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('employee_exit_type_id', $employee_exit_type_id, 'employee_exit_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/employee_exit_type');
    }
    $data['employee_exit_type_list'] = $this->User_Model->get_list_by_id('','','','','employee_exit_type_id','ASC','employee_exit_type');

    $employee_exit_type_info = $this->User_Model->get_info_arr('employee_exit_type_id',$employee_exit_type_id,'employee_exit_type');
    if(!$employee_exit_type_info){ header('location:'.base_url().'Master/employee_exit_type'); }
    $data['employee_exit_type_info'] = $employee_exit_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/employee_exit_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Employee Exit Type...
  public function delete_employee_exit_type($employee_exit_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('employee_exit_type_id', $employee_exit_type_id, 'employee_exit_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/employee_exit_type');
  }

/*********************************** Currency Type ******************************/

  // Add Currency Type...
  public function currency_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('currency_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['currency_type_addedby'] = $crm_user_id;
      $save_data['currency_type_date'] = date('d-m-Y');
      $save_data['currency_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('currency_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/currency_type');
    }

    $data['currency_type_list'] = $this->User_Model->get_list_by_id('','','','','currency_type_id','ASC','currency_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/currency_type', $data);
    $this->load->view('Include/footer', $data);
  }
  // Edit/Update Currency Type...
  public function edit_currency_type($currency_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('currency_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['currency_type_addedby'] = $crm_user_id;
      $update_data['currency_type_date'] = date('d-m-Y');
      $update_data['currency_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('currency_type_id', $currency_type_id, 'currency_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/currency_type');
    }
    $data['currency_type_list'] = $this->User_Model->get_list_by_id('','','','','currency_type_id','ASC','currency_type');

    $currency_type_info = $this->User_Model->get_info_arr('currency_type_id',$currency_type_id,'currency_type');
    if(!$currency_type_info){ header('location:'.base_url().'Master/currency_type'); }
    $data['currency_type_info'] = $currency_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/currency_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Currency Type...
  public function delete_currency_type($currency_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('currency_type_id', $currency_type_id, 'currency_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/currency_type');
  }

/****************************************** Company Type *********************************/

  // Add Company Type...
  public function company_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('company_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['company_type_addedby'] = $crm_user_id;
      $save_data['company_type_date'] = date('d-m-Y');
      $save_data['company_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('company_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/company_type');
    }

    $data['company_type_list'] = $this->User_Model->get_list_by_id('','','','','company_type_id','ASC','company_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/company_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Company Type...
  public function edit_company_type($company_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('company_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['company_type_addedby'] = $crm_user_id;
      $update_data['company_type_date'] = date('d-m-Y');
      $update_data['company_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('company_type_id', $company_type_id, 'company_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/company_type');
    }
    $data['company_type_list'] = $this->User_Model->get_list_by_id('','','','','company_type_id','ASC','company_type');

    $company_type_info = $this->User_Model->get_info_arr('company_type_id',$company_type_id,'company_type');
    if(!$company_type_info){ header('location:'.base_url().'Master/company_type'); }
    $data['company_type_info'] = $company_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/company_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Company Type...
  public function delete_company_type($company_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('company_type_id', $company_type_id, 'company_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/company_type');
  }

/******************************************** Security Type ******************************/

  // Add Security Type...
  public function security_type(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('security_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $save_data = $_POST;
      $save_data['company_id'] = $crm_company_id;
      $save_data['security_type_addedby'] = $crm_user_id;
      $save_data['security_type_date'] = date('d-m-Y');
      $save_data['security_type_time'] = date('h:i:s A');
      $this->User_Model->save_data('security_type', $save_data);

      $this->session->set_flashdata('save_success','success');
      header('location:'.base_url().'Master/security_type');
    }

    $data['security_type_list'] = $this->User_Model->get_list_by_id('','','','','security_type_id','ASC','security_type');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/security_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Edit/Update Security Type...
  public function edit_security_type($security_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('security_type_name', 'Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $update_data = $_POST;
      $update_data['security_type_addedby'] = $crm_user_id;
      $update_data['security_type_date'] = date('d-m-Y');
      $update_data['security_type_time'] = date('h:i:s A');
      $this->User_Model->update_info('security_type_id', $security_type_id, 'security_type', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Master/security_type');
    }
    $data['security_type_list'] = $this->User_Model->get_list_by_id('','','','','security_type_id','ASC','security_type');

    $security_type_info = $this->User_Model->get_info_arr('security_type_id',$security_type_id,'security_type');
    if(!$security_type_info){ header('location:'.base_url().'Master/security_type'); }
    $data['security_type_info'] = $security_type_info[0];

    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Master/security_type', $data);
    $this->load->view('Include/footer', $data);
  }

  // Delete Security Type...
  public function delete_security_type($security_type_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('security_type_id', $security_type_id, 'security_type');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/security_type');
  }

/********************************************* Custom Fields **********************************/

  // custom_fields
  public function custom_fields(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/custom_fields');
    $this->load->view('Include/footer');
  }

  // database_backup
  public function database_backup(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/database_backup');
    $this->load->view('Include/footer');
  }

  // email_template
  public function email_template(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/email_template');
    $this->load->view('Include/footer');
  }


}
?>
