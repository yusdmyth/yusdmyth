<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_model extends CI_Model {

  public function insert($data)
  {
    return $this->db->insert('formulir', $data);
  }

}

/* End of file Daftar_model.php */
