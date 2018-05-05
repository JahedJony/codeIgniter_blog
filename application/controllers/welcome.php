<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
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
		$data['maincontent'] = $this->load->view('about_content','',true);
		$data['title'] = 'About Us';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = '';
		$this->load->view('master',$data);
	}
	
	public function blog(){
		$data = array();
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['maincontent'] = $this->load->view('blog_content','',true);
		$data['title'] = 'Blog';
		$data['slider'] = 1;
		$data['menu'] = 1;
		$data['sponsor'] = 1;
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
	
	public function blog_details($blog_id){
		$data = array();
		$data['blog_info'] = $this->welcome_model->select_blog_info_by_id($blog_id);
		$data['all_published_category'] = $this->welcome_model->all_published_category();
		$data['maincontent'] = $this->load->view('blog_details',$data,true);
		$data['title'] = 'Blog';
		$data['slider'] = 1;
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
}
