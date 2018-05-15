<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

//library, helper, model
public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }

    //view login
public function index() {
if(isset($_SESSION['username'])) {
            redirect(site_url('dashboard'));
        } else {
$this->load->view('view_signin');
}
}

//check authentifikasi
public function checkAuth() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $loginUser = $this->m_user->checkLogin($username, $password);

            if (!empty($loginUser)) {
            $this->session->set_userdata($loginUser);
                $this->session->set_flashdata('berhasil', 'kamu berhasil masuk ...');
            redirect('dashboard');

            } else {
                $this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
                redirect();
            }
            
        } else {
            $this->session->set_flashdata('gagal', 'maaf, username / password kamu salah !');
            redirect();
        }
    } 

      //logout
    public function signout() {
    $this->session->sess_destroy();
    redirect();
}
} 