<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['recent_blog'] = $this->welcome_model->select_recent_blog();
		$data['all_published_blog'] = $this->welcome_model->all_published_blog();
		$data['maincontent'] = $this->load->view('home_content',$data,true);
		$data['title'] = 'Home';
		$data['slider'] = 1;
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function support(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['recent_blog'] = $this->welcome_model->select_recent_blog();
		$data['maincontent'] = $this->load->view('support_content','',true);
		$data['title'] = 'Support';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = '';
		$this->load->view('master',$data);
	}
	
	public function about(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['recent_blog'] = $this->welcome_model->select_recent_blog();
		$data['maincontent'] = $this->load->view('about_content','',true);
		$data['title'] = 'About Me';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = '';
		$this->load->view('master',$data);
	}
	
	public function contact(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['maincontent'] = $this->load->view('contact_content','',true);
		$data['title'] = 'Contact Us';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function sign_up(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['recent_blog'] = $this->welcome_model->select_recent_blog();
		$data['maincontent'] = $this->load->view('sign_up','',true);
		$data['title'] = 'Sign Up';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function blog_details($blog_id){
		$data = array();
		$data['blog_info'] = $this->welcome_model->select_blog_info_by_id($blog_id);
		$data['recent_blog'] = $this->welcome_model->select_recent_blog();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['comments_by_blog_id'] = $this->welcome_model->select_comments_by_blog_id($blog_id);
		$data['maincontent'] = $this->load->view('blog_details',$data,true);
		$data['title'] = 'Blog';
		$data['slider'] = 1;
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function category_blog($category_id){
		$data = array();
		$data['category_info'] = $this->welcome_model->select_blog_info_by_category_id($category_id);
		$data['recent_blog'] = $this->welcome_model->select_recent_blog();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['maincontent'] = $this->load->view('category_blog',$data,true);
		$data['title'] = 'Blog';
		$data['slider'] = 1;
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function save_user(){
		$data = array();
		$data['user_name'] = $this->input->post('user_name',true);
		$data['user_email'] = $this->input->post('user_email',true);
		$data['user_password'] = $this->input->post('user_password',true);
		$this->welcome_model->save_user_info($data);

		$sdata['message'] = 'Registration Successfully. You May Login Now !';
		$this->session->set_userdata($sdata);
		redirect ('welcome/sign_up');
	}
	
	public function login(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['recent_blog'] = $this->welcome_model->select_recent_blog();
		$data['maincontent'] = $this->load->view('login','',true);
		$data['title'] = 'Login';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function user_login_check(){
		$user_email=$this->input->post('user_email',true);
		$user_password=$this->input->post('user_password',true);
		$result = $this->welcome_model->user_login_check_info($user_email,$user_password);
		
		$sdata = array();
		if($result){
			$sdata['user_name']=$result->user_name;
			$sdata['user_id']=$result->user_id;
			$this->session->set_userdata($sdata);
			
			redirect('welcome');
		}else{
			$sdata['message'] = 'Your Email or Password Invalid !!!';
			$this->session->set_userdata($sdata);
			redirect ('welcome/login');
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_name');
		redirect('welcome');
	}
	
	public function post_comments(){
		$data = array();
		$data['blog_id']= $this->input->post('blog_id',true);
		$data['comments']= $this->input->post('comments',true);
		$data['author_name']= $this->session->userdata('user_name');
		$this->welcome_model->save_comments($data);
		
		$sdata = array();
		$sdata['message']= "Your Comments Successfully Saved, Waiting for Admin Approved";
		$this->session->set_userdata($sdata);
		redirect('welcome/blog_details/'.$data['blog_id']);
	}
}
