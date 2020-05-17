<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CoreHr extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }

  public function award(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('CoreHr/award');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_award($award_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('CoreHr/award');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_award($award_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('award_id', $award_id, 'award');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'CoreHr/award');
  }


  /******************************   Complaints    ***********************/

    public function complaints(){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('CoreHr/complaints');
      $this->load->view('Include/footer');
    }

    // Edit/Update Complaints...
    public function edit_complaints($complaints_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('CoreHr/complaints');
      $this->load->view('Include/footer');
    }

    //Delete Complaints...
    public function delete_complaints($complaints_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
      $this->User_Model->delete_info('complaints_id', $complaints_id, 'complaints');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'CoreHr/complaints');
    }


/******************************   Transfers    ***********************/

  public function transfers(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('CoreHr/transfers');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_transfers($transfers_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('CoreHr/transfers');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_transfers($transfers_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('transfers_id', $transfers_id, 'transfers');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'CoreHr/transfers');
  }



  /******************************   Resignations    ***********************/

    public function resignations(){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('CoreHr/resignations');
      $this->load->view('Include/footer');
    }

    // Edit/Update Education Level...
    public function edit_resignations($resignations_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('CoreHr/resignations');
      $this->load->view('Include/footer');
    }

    //Delete Education Level...
    public function delete_resignations($resignations_id){
      $crm_user_id = $this->session->userdata('crm_user_id');
      $crm_company_id = $this->session->userdata('crm_company_id');
      $crm_role_id = $this->session->userdata('crm_role_id');
      if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
      $this->User_Model->delete_info('resignations_id', $resignations_id, 'resignations');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'CoreHr/resignations');
    }


    /******************************   Terminations    ***********************/

      public function terminations(){
        $crm_user_id = $this->session->userdata('crm_user_id');
        $crm_company_id = $this->session->userdata('crm_company_id');
        $crm_role_id = $this->session->userdata('crm_role_id');
        if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

        $this->load->view('Include/head');
        $this->load->view('Include/navbar');
        $this->load->view('CoreHr/terminations');
        $this->load->view('Include/footer');
      }

      // Edit/Update Complaints...
      public function edit_terminations($terminations_id){
        $crm_user_id = $this->session->userdata('crm_user_id');
        $crm_company_id = $this->session->userdata('crm_company_id');
        $crm_role_id = $this->session->userdata('crm_role_id');
        if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

        $this->load->view('Include/head');
        $this->load->view('Include/navbar');
        $this->load->view('CoreHr/terminations');
        $this->load->view('Include/footer');
      }

      //Delete Complaints...
      public function delete_terminations($terminations_id){
        $crm_user_id = $this->session->userdata('crm_user_id');
        $crm_company_id = $this->session->userdata('crm_company_id');
        $crm_role_id = $this->session->userdata('crm_role_id');
        if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
        $this->User_Model->delete_info('terminations_id', $terminations_id, 'terminations');
        $this->session->set_flashdata('delete_success','success');
        header('location:'.base_url().'CoreHr/terminations');
      }


      /******************************   Warning    ***********************/

        public function warning(){
          $crm_user_id = $this->session->userdata('crm_user_id');
          $crm_company_id = $this->session->userdata('crm_company_id');
          $crm_role_id = $this->session->userdata('crm_role_id');
          if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

          $this->load->view('Include/head');
          $this->load->view('Include/navbar');
          $this->load->view('CoreHr/warning');
          $this->load->view('Include/footer');
        }

        // Edit/Update Complaints...
        public function edit_warning($warning_id){
          $crm_user_id = $this->session->userdata('crm_user_id');
          $crm_company_id = $this->session->userdata('crm_company_id');
          $crm_role_id = $this->session->userdata('crm_role_id');
          if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

          $this->load->view('Include/head');
          $this->load->view('Include/navbar');
          $this->load->view('CoreHr/warning');
          $this->load->view('Include/footer');
        }

        //Delete Complaints...
        public function delete_warning($warning_id){
          $crm_user_id = $this->session->userdata('crm_user_id');
          $crm_company_id = $this->session->userdata('crm_company_id');
          $crm_role_id = $this->session->userdata('crm_role_id');
          if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
          $this->User_Model->delete_info('warning_id', $warning_id, 'warning');
          $this->session->set_flashdata('delete_success','success');
          header('location:'.base_url().'CoreHr/warning');
        }


    /******************************   Travels    ***********************/

      public function travels(){
        $crm_user_id = $this->session->userdata('crm_user_id');
        $crm_company_id = $this->session->userdata('crm_company_id');
        $crm_role_id = $this->session->userdata('crm_role_id');
        if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

        $this->load->view('Include/head');
        $this->load->view('Include/navbar');
        $this->load->view('CoreHr/travels');
        $this->load->view('Include/footer');
      }

      // Edit/Update Education Level...
      public function edit_travels($travels_id){
        $crm_user_id = $this->session->userdata('crm_user_id');
        $crm_company_id = $this->session->userdata('crm_company_id');
        $crm_role_id = $this->session->userdata('crm_role_id');
        if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

        $this->load->view('Include/head');
        $this->load->view('Include/navbar');
        $this->load->view('CoreHr/travels');
        $this->load->view('Include/footer');
      }

      //Delete Education Level...
      public function delete_travels($travels_id){
        $crm_user_id = $this->session->userdata('crm_user_id');
        $crm_company_id = $this->session->userdata('crm_company_id');
        $crm_role_id = $this->session->userdata('crm_role_id');
        if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
        $this->User_Model->delete_info('travels_id', $travels_id, 'travels');
        $this->session->set_flashdata('delete_success','success');
        header('location:'.base_url().'CoreHr/travels');
      }




      /******************************   Pramotions    ***********************/

        public function pramotions(){
          $crm_user_id = $this->session->userdata('crm_user_id');
          $crm_company_id = $this->session->userdata('crm_company_id');
          $crm_role_id = $this->session->userdata('crm_role_id');
          if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

          $this->load->view('Include/head');
          $this->load->view('Include/navbar');
          $this->load->view('CoreHr/pramotions');
          $this->load->view('Include/footer');
        }

        // Edit/Update Education Level...
        public function edit_pramotions($pramotions_id){
          $crm_user_id = $this->session->userdata('crm_user_id');
          $crm_company_id = $this->session->userdata('crm_company_id');
          $crm_role_id = $this->session->userdata('crm_role_id');
          if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

          $this->load->view('Include/head');
          $this->load->view('Include/navbar');
          $this->load->view('CoreHr/pramotions');
          $this->load->view('Include/footer');
        }

        //Delete Education Level...
        public function delete_pramotions($pramotions_id){
          $crm_user_id = $this->session->userdata('crm_user_id');
          $crm_company_id = $this->session->userdata('crm_company_id');
          $crm_role_id = $this->session->userdata('crm_role_id');
          if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
          $this->User_Model->delete_info('pramotions_id', $pramotions_id, 'pramotions');
          $this->session->set_flashdata('delete_success','success');
          header('location:'.base_url().'CoreHr/pramotions');
        }


}
?>
