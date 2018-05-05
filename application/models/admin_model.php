<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	public function admin_login_check_info($admin_email,$admin_password){
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('admin_email',$admin_email);
		$this->db->where('admin_password',$admin_password);

		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
}
