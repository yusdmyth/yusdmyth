<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model{

  public function listing()
  {
    return $this->db->get('konfigurasi')->row_array();
  }

  public function update($data)
  {
    $this->db->where('id', 1);
    return $this->db->update('konfigurasi', $data);
  }
}