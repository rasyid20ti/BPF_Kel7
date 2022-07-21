<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_model');
    }

    public function index()
    {
        $data['judul2'] = "Halaman Supplier";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->Supplier_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("supplier/vw_supplier", $data);
        $this->load->view("layout/footer", $data);
    }
    
    public function tambah()
    {
        $data['judul2'] = "Halaman Tambah Supplier";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("supplier/vw_tambah_supplier", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit($id)
    {
        $data['judul2'] = "Halaman Edit Supplier";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->Supplier_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("supplier/vw_ubah_supplier", $data);
        $this->load->view("layout/footer",$data);
    }

    public function update()
    {
        $data = [
            'nama_supplier' => $this->input->post('nama_supplier'),
            'alamat_supplier' => $this->input->post('alamat_supplier'),
            'kota_supplier' => $this->input->post('kota_supplier'),
            'no_hp' => $this->input->post('no_hp'),
            ];
            $id_supplier = $this->input->post('id_supplier');
            $this->Supplier_model->update(['id_supplier' => $id_supplier], $data);
            redirect('Supplier'); 
    }

    public function hapus($id)
    {
        $this->Supplier_model->delete($id);
        redirect('Supplier');
    }

    public function upload()
    {
        $data = [
            'nama_supplier' => $this->input->post('nama_supplier'),
            'alamat_supplier' => $this->input->post('alamat_supplier'),
            'kota_supplier' => $this->input->post('kota_supplier'),
            'no_hp' => $this->input->post('no_hp'),
            ];
            $this->Supplier_model->insert($data);
            redirect('Supplier');
    }
}

?>