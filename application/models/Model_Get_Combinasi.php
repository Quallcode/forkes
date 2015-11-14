<?php
class Model_Get_Combinasi extends CI_Model {
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

  function Validate($table,$id){
    $this->db->select('nama_obat_combinasi');
    $this->db->from($table);
    $this->db->where('nama_obat_combinasi',$id);
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

  function Custom_UsulanWithParam($type,$sess){
    if($type == 1)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_rs`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,
        (SELECT `rumah_sakit`.`id_rs`,`rumah_sakit`.`nama_rs`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota`,A.`provinsi` FROM `rumah_sakit`,
        (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`, `provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A
        WHERE A.`id_provinsi` = `rumah_sakit`.`id_provinsi` AND A.`id_kabkota` = `rumah_sakit`.`id_kabkota` AND A.`id_kabkota` = ".$sess['id_kabkota']." AND A.`id_provinsi` = ".$sess['id_provinsi'].") B
        WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_rs` AND `usulan`.`deleted` = 0 AND `usulan`.`id_faskes` = ".$sess['id_faskes'] ." GROUP BY `usulan`.`nomor_efornas`";
    if($type == 2)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_klinik`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,(SELECT `klinik`.`id_klinik`,`klinik`.`nama_klinik`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota,A.`provinsi` FROM `klinik`, (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`,`provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A WHERE A.`id_provinsi` = `klinik`.`id_provinsi` AND A.`id_kabkota` = `klinik`.`id_kabkota`) B WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_klinik` AND `usulan`.`deleted` = 0";
    $result = $this->db->query($query);
    $i = 0;
    if ($result->num_rows() > 0) {
      foreach($result->result_array() as $row){
        $data[$i] = $row;
        $detail_usulan = $this->Sub_Select('detail_usulan','nomor_efornas',$row['nomor_efornas']);
        $data[$i]['detail_usulan'] = $detail_usulan;
        $i++;
      }
      return $data;
    }
    else{
      return FALSE;
    }
  }

  function Custom_Usulan($type){
    if($type == 1)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_rs`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,
        (SELECT `rumah_sakit`.`id_rs`,`rumah_sakit`.`nama_rs`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota`,A.`provinsi` FROM `rumah_sakit`,
        (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`, `provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A
        WHERE A.`id_provinsi` = `rumah_sakit`.`id_provinsi` AND A.`id_kabkota` = `rumah_sakit`.`id_kabkota`) B
        WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_rs` AND `usulan`.`deleted` = 0 AND `usulan`.`status` = 'BELUM' GROUP BY `usulan`.`nomor_efornas`";
    if($type == 2)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_klinik`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,(SELECT `klinik`.`id_klinik`,`klinik`.`nama_klinik`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota,A.`provinsi` FROM `klinik`, (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`,`provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A WHERE A.`id_provinsi` = `klinik`.`id_provinsi` AND A.`id_kabkota` = `klinik`.`id_kabkota`) B WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_klinik` AND `usulan`.`deleted` = 0";
    $result = $this->db->query($query);
    $i = 0;
    if ($result->num_rows() > 0) {
      foreach($result->result_array() as $row){
        $data[$i] = $row;
        $detail_usulan = $this->Sub_Select('detail_usulan','nomor_efornas',$row['nomor_efornas']);
        $data[$i]['detail_usulan'] = $detail_usulan;
        $i++;
      }
      return $data;
    }
    else{
      return FALSE;
    }
  }

  function Custom_Usulan_Lengkap($type){
    if($type == 1)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_rs`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,
        (SELECT `rumah_sakit`.`id_rs`,`rumah_sakit`.`nama_rs`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota`,A.`provinsi` FROM `rumah_sakit`,
        (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`, `provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A
        WHERE A.`id_provinsi` = `rumah_sakit`.`id_provinsi` AND A.`id_kabkota` = `rumah_sakit`.`id_kabkota`) B
        WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_rs` AND `usulan`.`deleted` = 0 AND `usulan`.`status` = 'SUDAH' GROUP BY `usulan`.`nomor_efornas`";
    if($type == 2)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_klinik`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,(SELECT `klinik`.`id_klinik`,`klinik`.`nama_klinik`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota,A.`provinsi` FROM `klinik`, (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`,`provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A WHERE A.`id_provinsi` = `klinik`.`id_provinsi` AND A.`id_kabkota` = `klinik`.`id_kabkota`) B WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_klinik` AND `usulan`.`deleted` = 0";
    $result = $this->db->query($query);
    $i = 0;
    if ($result->num_rows() > 0) {
      foreach($result->result_array() as $row){
        $data[$i] = $row;
        $detail_usulan = $this->Sub_Select('detail_usulan','nomor_efornas',$row['nomor_efornas']);
        $data[$i]['detail_usulan'] = $detail_usulan;
        $i++;
      }
      return $data;
    }
    else{
      return FALSE;
    }
  }

  function Custom_Usulan_Tidak_Lengkap($type){
    if($type == 1)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_rs`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,
        (SELECT `rumah_sakit`.`id_rs`,`rumah_sakit`.`nama_rs`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota`,A.`provinsi` FROM `rumah_sakit`,
        (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`, `provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A
        WHERE A.`id_provinsi` = `rumah_sakit`.`id_provinsi` AND A.`id_kabkota` = `rumah_sakit`.`id_kabkota`) B
        WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_rs` AND `usulan`.`deleted` = 0 AND `usulan`.`status` = 'TIDAK' GROUP BY `usulan`.`nomor_efornas`";
    if($type == 2)
      $query = "SELECT `usulan`.`id`,B.`provinsi`,B.`kabkota`,B.`nama_klinik`,`usulan`.`nomor_efornas`,`usulan`.`daftar_usulan_obat`,`usulan`.`surat_pengantar`, `usulan`.`status` FROM `usulan`,(SELECT `klinik`.`id_klinik`,`klinik`.`nama_klinik`, A.`id_provinsi`, A.`id_kabkota`,A.`kabkota,A.`provinsi` FROM `klinik`, (SELECT `id_provinsi`,`id_kabkota`, `kabkota`.`kabkota`,`provinsi`.`provinsi` FROM `kabkota`,`provinsi` WHERE `kabkota`.`parent_id` = `provinsi`.`id_provinsi`) A WHERE A.`id_provinsi` = `klinik`.`id_provinsi` AND A.`id_kabkota` = `klinik`.`id_kabkota`) B WHERE B.`id_kabkota` = `usulan`.`id_kabkota` AND B.`id_provinsi` = `usulan`.`id_provinsi` AND `usulan`.`id_faskes` = B.`id_klinik` AND `usulan`.`deleted` = 0";
    $result = $this->db->query($query);
    $i = 0;
    if ($result->num_rows() > 0) {
      foreach($result->result_array() as $row){
        $data[$i] = $row;
        $detail_usulan = $this->Sub_Select('detail_usulan','nomor_efornas',$row['nomor_efornas']);
        $data[$i]['detail_usulan'] = $detail_usulan;
        $i++;
      }
      return $data;
    }
    else{
      return FALSE;
    }
  }

  function Sub_Select($table,$param,$on){
    $this->db->select('kekuatan, nama_sediaan, nama_satuan, nama_obat, jurnal, alasan, restriksi, tipe_usulan, file_jurnal, Kelas_terapi');
    $this->db->from($table);
    $this->db->join('kelas_terapi', '`kelas_terapi`.`id_terapi` = `detail_usulan`.`id_terapi`' , 'left');
    $this->db->join('atc_obat', '`atc_obat`.`id_atc_obat` = `detail_usulan`.`id_atc_obat`' , 'left');
    $this->db->join('kekuatan', ' `kekuatan`.`id_kekuatan` = `detail_usulan`.`id_kekuatan`' , 'left');
    $this->db->join('sediaan', '`sediaan`.`id_sediaan` = `detail_usulan`.`id_sediaan`' , 'left');
    $this->db->join('satuan', '`satuan`.`id_satuan` = `detail_usulan`.`id_satuan`' , 'left');
		$this->db->where($param,$on);
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