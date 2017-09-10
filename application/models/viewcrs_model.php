<?php

class viewcrs_model extends CI_Model {

	private $table = "courses";
	
	public function create($record) {
		$this->db->insert($this->table, $record);
		return TRUE;
	}
	
	public function read() {
			
		$this->db->select('*');
		
		$this->db->from($this->table);
		
		$query=$this->db->get();
		
		return $query->result_array();
	}
	
}
?>