<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {

  public function getByNisn($nisn)
  {
    return $this->db->get_where('formulir', ['nisn'=>$nisn]);
  }

  public function getById($id)
  {
    return $this->db->get_where('formulir', ['id'=>$id]);
  }

}

/* End of file Cetak_model.php */
