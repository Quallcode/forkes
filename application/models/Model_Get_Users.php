<?php
class Model_Get_Users extends CI_Model {
	function Normal_Select ($table,$param = NULL ,$on = NULL,$param2 = NULL ,$on2 = NULL,$param3 = NULL ,$on3 = NULL) {
	$this->db->select('*');
    $this->db->from($table);
	$this->db->where('deleted = ', '0');
  if(!empty($param))
    $this->db->where($param. ' = ', $on);
  if(!empty($param2))
    $this->db->where($param2. ' = ', $on2);
  if(!empty($param3))
    $this->db->where($param3. ' = ', $on3);
	$this->db->join('users_type', 'users.type = users_type.id');
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

	function validate($table,$id){
		$this->db->select('id');
		$this->db->from($table);
		$this->db->where('username',$id);
		$result = $this->db->get();
		$view_result = $result->result_array();
		if($view_result == Array ( ))
		{
			return FALSE;
		}
		else {
			return TRUE;
		}
	}

	function Update_Select ($table,$fieldname,$post) {
		$this->db->select('*');
			$this->db->from($table);
		$this->db->where($fieldname,$post);
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
