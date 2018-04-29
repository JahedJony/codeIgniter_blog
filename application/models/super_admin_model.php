<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin_model extends CI_Model {
	public function save_category_info($data){
		$this->db->insert('tbl_category',$data);
	}
}
