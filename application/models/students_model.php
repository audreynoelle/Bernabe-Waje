<?php

class students_model extends CI_Model {

	private $table = "students";
	
	public function read() {
		
		// SELECT * FROM students
			
		$this->db->select('*');
		
		$this->db->from($this->table);
		
		// $this->db->select()
				// ->from()
				// ->join()
				// ->where();
		
		//$this->db->join('table2','table1.key=table2.fk','inner');
		//$this->db->order_by('field name');
		
		// if (isset($condition) ) $this->db->where($condition);
		
		$query=$this->db->get();
		
		return $query->result_array();
	}
	
}
?>