<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data = array();
		$data['maincontent'] = $this->load->view('home_content','',true);
		$data['title'] = 'Home';
		$data['slider'] = 1;
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function support(){
		$data = array();
		$data['maincontent'] = $this->load->view('support_content','',true);
		$data['title'] = 'Support';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = '';
		$this->load->view('master',$data);
	}
	
	public function about(){
		$data = array();
		$data['maincontent'] = $this->load->view('about_content','',true);
		$data['title'] = 'About Us';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = '';
		$this->load->view('master',$data);
	}
	
	public function blog(){
		$data = array();
		$data['maincontent'] = $this->load->view('blog_content','',true);
		$data['title'] = 'Blog';
		$data['slider'] = 1;
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
	
	public function contact(){
		$data = array();
		$data['maincontent'] = $this->load->view('contact_content','',true);
		$data['title'] = 'Contact Us';
		$data['slider'] = '';
		$data['menu'] = 1;
		$data['sponsor'] = 1;
		$this->load->view('master',$data);
	}
}
