<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }
  
  public function index()
  {
    $data = konfigurasi('Home');
    $this->template->load('templates/template', 'home', $data);
  }

  public function profil()
  {
    $data = konfigurasi('Profil');
    $this->template->load('templates/template', 'profil', $data);
  }

  public function kontak()
  {
    $data = konfigurasi('Kontak');
    $this->template->load('templates/template', 'kontak', $data);
  }

}

/* End of file Home.php */
