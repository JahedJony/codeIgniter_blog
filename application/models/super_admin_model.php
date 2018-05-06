<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin_model extends CI_Model {
	
	public function save_category_info($data){
		$this->db->insert('tbl_category',$data);
	}
	
	public function select_all_category(){
		$this->db->select('*');
		$this->db->from('tbl_category');

		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	
	public function update_category_to_unpublished($category_id){
		$this->db->set('publication_status',0);
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');
	}
	
	public function update_category_to_published($category_id){
		$this->db->set('publication_status',1);
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');
	}
	
	public function delete_category_info($category_id){
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_category');
	}
	
	public function edit_category_info_by_id($category_id){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('category_id',$category_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
	
	public function update_category_info($data,$category_id){
		$this->db->where('category_id', $category_id);
		$this->db->update('tbl_category', $data);
	}
	
	public function save_blog_info($data){
		$this->db->insert('tbl_blog',$data);
	}
	
	public function select_all_blog(){
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_category', 'tbl_category.category_id = tbl_blog.category_id', 'left');
		
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	
	public function update_blog_to_unpublished($blog_id){
		$this->db->set('publication_status',0);
		$this->db->where('blog_id',$blog_id);
		$this->db->update('tbl_blog');
	}
	
	public function update_blog_to_published($blog_id){
		$this->db->set('publication_status',1);
		$this->db->where('blog_id',$blog_id);
		$this->db->update('tbl_blog');
	}
	
	public function delete_blog_info($blog_id){
		$this->db->where('blog_id',$blog_id);
		$this->db->delete('tbl_blog');
	}
	
	public function edit_blog_info_by_id($blog_id){
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->where('blog_id',$blog_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
	
	public function select_all_published_category(){
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}
	
	public function update_blog_info($data,$blog_id){
		$this->db->where('blog_id', $blog_id);
		$this->db->update('tbl_blog', $data);
	} 
}
