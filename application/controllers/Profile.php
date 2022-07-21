<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Profile";
        $this->load->view("layout/header");
        $this->load->view("profile/vw_profile", $data);
        $this->load->view("layout/footer");
    }
    
}

?>