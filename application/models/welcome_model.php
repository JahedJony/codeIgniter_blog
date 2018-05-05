<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {
	
	public function all_published_category(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);

		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	
	public function all_published_blog(){
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_category', 'tbl_category.category_id = tbl_blog.category_id', 'left');
		$this->db->where('tbl_blog.publication_status',1);

		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	
	public function select_blog_info_by_id($blog_id){
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_category', 'tbl_category.category_id = tbl_blog.category_id', 'left');
		$this->db->where('tbl_blog.blog_id',$blog_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
	
	public function select_blog_info_by_category_id($category_id){
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_category', 'tbl_category.category_id = tbl_blog.category_id', 'left');
		$this->db->where('tbl_blog.category_id',$category_id);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
}
