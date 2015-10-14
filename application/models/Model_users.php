<?php
class Model_users extends CI_Model {
	function check_login_valid ($post) {
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
}
?>
