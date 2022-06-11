<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

  public function get()
  {
    return $this->db->get_where('users', ['id'=>1]);
  }

  public function update($data)
  {
    $this->db->update('users', $data, ['id'=>1]);
    return $this->db->affected_rows();
  }

}

/* End of file Profil_model.php */
