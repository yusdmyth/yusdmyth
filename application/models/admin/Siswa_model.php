<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

  public function getAll($where = NULL)
  {
    if ($where) {
      $this->db->where('status_pendaftaran', $where);
    }
    return $this->db->get('formulir');
  }

  public function getById($id)
  {
    return $this->db->get_where('formulir', ['id'=>$id]);
  }

  public function insert($data)
  {
    return $this->db->insert('formulir', $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->where('status_pendaftaran!=', 'Diterima');
    $this->db->delete('formulir');
    return $this->db->affected_rows();
  }

  public function verifikasi($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update('formulir', $data);
  }

}

/* End of file Siswa_model.php */
