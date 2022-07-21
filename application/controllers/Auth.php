<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    public function index()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
    }
    
    public function registrasi()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/registrasi");
        $this->load->view("layout/auth_footer");
    }

    public function cek_regis()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'gambar' => 'user.jpg',
            'role' => "User"
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="text-success" role="text">Selamat! 
        Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
        redirect('Auth');
    }
    
    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'Admin') {
                    redirect('Dashboard');
                } else {
                    redirect('Profil');
                }
            } else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
            redirect('auth');
        }
    }
    
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message','<div class="text-success" role="text">Berhasil Logout!</div>');
            redirect('Auth');
    }
}
?>