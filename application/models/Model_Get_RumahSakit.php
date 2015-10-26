<?php
class Model_Get_RumahSakit extends CI_Model {
  function Normal_Select ($table) {
	$this->db->select('*');
    $this->db->from($table);
	$this->db->where('deleted = ', '0');
	$result = $this->db->get();
    $i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
        /**GET DATA FOR PROVINSI
        $provinsi = $this->Sub_Main_Select('id_provinsi',$data[$i]['id_provinsi'],'provinsi');
        //print_r($provinsi);exit;
        $data[$i]['provinsi'] = $provinsi['provinsi'];
        //GET DATA FOR KABKOTA
        $kabkota = $this->Sub_Main_Select('id_kabkota',$data[$i]['id_kabkota'],'kabkota','parent_id',$data[$i]['id_provinsi']);
        //print_r($provinsi);exit;
        $data[$i]['kabkota'] = $kabkota['kabkota'];**/
        $i++;
      }
			return $data;
		}
		else{
			return FALSE;
		}
	}

  function Sub_Main_Select ($param, $on, $table, $param2  = NULL, $on2 = NULL) {
	 $this->db->select('*');
   $this->db->from($table);
	 $this->db->where($param .' = ', $on);
   if(!empty($param2)){
     $this->db->where($param2 .' = ', $on2);
   }
	 $result = $this->db->get();
		if ($result->num_rows() == 1) {
			foreach($result->result_array() as $row){
				$data= $row;
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
    $this->db->where('id_kekuatan',$id);
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
