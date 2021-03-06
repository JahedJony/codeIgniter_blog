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
	
	public function delete_category($category_id){
		$this->super_admin_model->delete_category_info($category_id);
		redirect('super_admin/manage_category');
	}
	
	public function edit_category($category_id){
		$data = array();		
		$data['category_info'] = $this->super_admin_model->edit_category_info_by_id($category_id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_category_form',$data,true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function update_category(){
		$data = array();		
		$category_id = $this->input->post('category_id',true);
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_description'] = $this->input->post('category_description',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$this->super_admin_model->update_category_info($data,$category_id);
		redirect('super_admin/manage_category');
	}
	
	public function add_blog(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['admin_maincontent'] = $this->load->view('admin/add_blog_form',$data,true);
		$this->load->view('admin/admin_master',$data);		
	}
	
	public function save_blog(){
		$data = array();
		$data['blog_title'] = $this->input->post('blog_title',true);
		$data['category_id'] = $this->input->post('category_id',true);
		$data['blog_short_description'] = $this->input->post('blog_short_description',true);
		$data['blog_long_description'] = $this->input->post('blog_long_description',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$data['author_name'] = $this->session->userdata('admin_full_name');
		$this->super_admin_model->save_blog_info($data);
		
		$sdata = array();
		$sdata['message'] = "Blog Information Saved Successfully";
		$this->session->set_userdata($sdata);		
		redirect('super_admin/add_blog');	
	}
	
	public function manage_blog(){
		$data = array();		
		$data['all_blog'] = $this->super_admin_model->select_all_blog();
		$data['admin_maincontent'] = $this->load->view('admin/manage_blog',$data,true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function unpublished_blog($blog_id){
		$this->super_admin_model->update_blog_to_unpublished($blog_id);
		redirect('super_admin/manage_blog');
	}
	
	public function published_blog($blog_id){
		$this->super_admin_model->update_blog_to_published($blog_id);
		redirect('super_admin/manage_blog');
	}
	
	public function delete_blog($blog_id){
		$this->super_admin_model->delete_blog_info($blog_id);
		redirect('super_admin/manage_blog');
	}
	
	public function edit_blog($blog_id){
		$data = array();		
		$data['blog_info'] = $this->super_admin_model->edit_blog_info_by_id($blog_id);
		$data['all_published_category'] = $this->super_admin_model->select_all_published_category();
		$data['admin_maincontent'] = $this->load->view('admin/edit_blog_form',$data,true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function update_blog(){
		$data = array();		
		$blog_id = $this->input->post('blog_id',true);
		$data['blog_title'] = $this->input->post('blog_title',true);
		$data['category_id'] = $this->input->post('category_id',true);
		$data['blog_short_description'] = $this->input->post('blog_short_description',true);
		$data['blog_long_description'] = $this->input->post('blog_long_description',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$this->super_admin_model->update_blog_info($data,$blog_id);
		redirect('super_admin/manage_blog');
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
