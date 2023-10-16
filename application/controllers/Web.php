<?php
defined('BASEPATH') or exit ('no direct script acces allowes');

class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function about(){
            $data['judul'] = "Halaman About";
            $this->load->view('v_header', $data);
            $this->load->view('v_about', $data);
            $this->load->view('v_footer', $data);
    }

    public function bukutamu(){
        $data['judul'] = "Halaman Buku Tamu";
        $this->load->view('v_header', $data);
        $this->load->view('v_bukutamu', $data);
        $this->load->view('v_footer', $data);
    }

    public function infotamu(){
    $data['judul'] = "Halaman Buku Tamu";
    $this->load->view('v_header', $data);
    $data = [
    'nama' => $this->input->post('nama'),
    'email' => $this->input->post('email'),
    'komentar' => $this->input->post('komentar'),
    ];
    $this->load->view('v_infotamu', $data);
    $this->load->view('v_footer', $data);
    }

}