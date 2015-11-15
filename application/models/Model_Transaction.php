<?php
class Model_Transaction extends CI_Model {
	//INSERT TO DB
	function Insert_To_Db ($data,$table) {
		$this->db->insert($table, $data);
	}
	//UPDATE TO DB
	function Update_To_Db ($data,$table,$param,$on){
		$this->db->where($param, $on);
		$this->db->update($table, $data);
	}

	function Delete_To_Db($table, $param, $on){
		$this->db->where($param, $on);
		$this->db->delete($table);
	}
}
?>
