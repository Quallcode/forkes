<?php
class Model_Users extends CI_Model {
	function Check_Login_Valid ($post) {
		//print_r($post); exit;
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users.username = ',$post['username']);
		$this->db->where('users.password =',md5($post['password']));

		$result = $this->db->get();
		if ($result->num_rows() == 1) {
			foreach($result->result_array() as $row){
				$data = $row;
			}
			return $data;
		}
		else{
			return FALSE;
		}
	}

	function Update_Flag_1($data_input,$username) {
		$this->db->trans_begin();
		$this->db->where('users.username',$username);
		$this->db->update('users', $data_input);

		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}else{
			$this->db->trans_commit();
			return true;
		}
	}

	function Update_Flag_0($data_input,$username) {
		$this->db->trans_begin();
		$this->db->where('users.username',$username);
		$this->db->update('users', $data_input);

		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}else{
			$this->db->trans_commit();
			return true;
		}
	}

	function Check_Login_Status($post){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users.username = ',$post['username']);
		$this->db->where('users.password =',md5($post['password']));
		$this->db->where('users.flag = ',$post['flag']);

		$result = $this->db->get();
		if ($result->num_rows() == 1) {
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
}
?>
