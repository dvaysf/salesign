<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('main/header', $data);
        $this->load->view('main/home', $data);
        $this->load->view('main/footer', $data);
    }

    public function info_stok()
    {
        $data['title'] = 'Info Stok';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['info_stok'] = $this->db->get('info_stok')->result_array();

        $this->load->view('main/header', $data);
        $this->load->view('main/info_stok', $data);
        $this->load->view('main/footer', $data);
    }

    public function info_status_order()
    {
        $data['title'] = 'Info Status Order';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['info_stok'] = $this->db->get('info_stok')->result_array();

        $this->load->view('main/header', $data);
        $this->load->view('main/info_status_order', $data);
        $this->load->view('main/footer', $data);
    }

    public function laporan_piutang_sales()
    {
        $data['title'] = 'Laporan Piutang Sales';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['info_stok'] = $this->db->get('info_stok')->result_array();

        $this->load->view('main/header', $data);
        $this->load->view('main/laporan_piutang_sales', $data);
        $this->load->view('main/footer', $data);
    }

    public function laporan_piutang_toko()
    {
        $data['title'] = 'Laporan Piutang Toko';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['info_stok'] = $this->db->get('info_stok')->result_array();

        $this->load->view('main/header', $data);
        $this->load->view('main/laporan_piutang_toko', $data);
        $this->load->view('main/footer', $data);
    }
}
