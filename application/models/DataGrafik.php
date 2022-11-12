<?php 
 
class DataGrafik extends CI_Model{
	function data(){
		$this->db->select('*');
		return $this->db->get('list')->result_array();
	}

    
}   