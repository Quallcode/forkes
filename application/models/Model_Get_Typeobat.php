<?php
class Model_Get_Typeobat extends CI_Model {
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
}
?>
