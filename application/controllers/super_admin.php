<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Super_Admin extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id == NULL){
        	redirect('admin','refresh');
        }
    }
	
	public function index(){
		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/dashboard','',true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function add_category(){
		$data = array();
		$data['admin_maincontent'] = $this->load->view('admin/add_category_form','',true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function save_category(){
		$data = array();
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_description'] = $this->input->post('category_description',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$this->super_admin_model->save_category_info($data);
		
		$sdata = array();
		$sdata['message'] = "Category Information Saved Successfully";
		$this->session->set_userdata($sdata);		
		redirect('super_admin/add_category');
	}
	
	public function manage_category(){
		$data = array();		
		$data['all_category'] = $this->super_admin_model->select_all_category();
		$data['admin_maincontent'] = $this->load->view('admin/manage_category',$data,true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function unpublished_category($category_id){
		$this->super_admin_model->update_category_to_unpublished($category_id);
		redirect('super_admin/manage_category');
	}
	
	public function published_category($category_id){
		$this->super_admin_model->update_category_to_published($category_id);
		redirect('super_admin/manage_category');
	}
	
	public function logout(){
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_full_name');

		$sdata=array();
		$sdata['message'] = 'Your are Successfully logout.';
		$this->session->set_userdata($sdata);
		redirect('admin');
	}
}
