<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Tidak perlu load model lagi
    }

    public function index()
    {
        // Langsung ambil data dari database menggunakan query builder
        $data['anggota'] = $this->db->get('anggota')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'no_anggota' => $this->input->post('no_anggota'),
            'nama'       => $this->input->post('nama'),
            'alamat'     => $this->input->post('alamat'),
            'telepon'    => $this->input->post('telepon'),
            'email'      => $this->input->post('email'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'status'     => 'Aktif'
        );

        $this->db->insert('anggota', $data);
        redirect('anggota');
    }

    public function edit($id)
    {
        $data['anggota'] = $this->db->get_where('anggota', ['id' => $id])->row();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('anggota');
        redirect('anggota');
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'no_anggota' => $this->input->post('no_anggota'),
            'nama'       => $this->input->post('nama'),
            'alamat'     => $this->input->post('alamat'),
            'telepon'    => $this->input->post('telepon'),
            'email'      => $this->input->post('email'),
            'status'     => $this->input->post('status')
        );

        $this->db->where('id', $id);
        $this->db->update('anggota', $data);
        redirect('anggota');
    }
}