<?php
class Model_News extends CI_Model {
	function Custom_Select () {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('deleted = ', '0');
		$this->db->order_by('create_date', 'DESC');
		$result = $this->db->get();
		$i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
				$i++;
			  }
			return $data;
		}
		else{
			return FALSE;
		}
	}
	
	function Get_News ($uri) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('deleted = ', '0');
		$this->db->where('id_news = ', $uri);
		$result = $this->db->get();
		$i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
				$i++;
			  }
			return $data;
		}
		else{
			return FALSE;
		}
	}
}
?>
