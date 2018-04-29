<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id != NULL){
        	redirect('super_admin','refresh');
        }
      }

	public function index(){
		$this->load->view('admin/login');
	}
	
	public function admin_login_check(){
		$data = array();
		$admin_email = $this->input->post('admin_email',true);
		$admin_password = $this->input->post('admin_password',true);
		$result = $this->admin_model->admin_login_check_info($admin_email,$admin_password);

		$sdata = array();
		if($result){
			//admin information into sesssion $sdata
			$sdata['admin_full_name'] = $result->admin_full_name;
			$sdata['admin_id'] = $result->admin_id;
			$this->session->set_userdata($sdata);

			redirect ('super_admin');
			
		}
		else{
			$sdata['exception'] = 'Your Email or Password Invalid.';
			$this->session->set_userdata($sdata);
			redirect ('admin');
		}
	}
	
}
