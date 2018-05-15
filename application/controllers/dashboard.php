<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

//library, helper, model
public function __construct() {
        parent::__construct();
        sesiAdmin();
    }

    //dashboard
public function index() {
$data = array(
'title' => 'Dashboard | SIM JALAK',
'lab'   => $this->db->query("SELECT * FROM tbl_ruanglab")->num_rows(),
'mpl'   => $this->db->query("SELECT * FROM tbl_matapelajaran")->num_rows(),
'gur'   => $this->db->query("SELECT * FROM tbl_guru")->num_rows(),
'jdw'   => $this->db->query("SELECT * FROM tbl_jadwal")->num_rows()
);
$this->load->view('admin/header', $data);
$this->load->view('admin/sidebar');
$this->load->view('admin/view_dashboard');
$this->load->view('admin/footer');
}
} 