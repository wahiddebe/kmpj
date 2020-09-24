<?php
class Sub_kategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_sub_kategori');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$data['data'] = $this->m_sub_kategori->tampil_kategori();
			$this->load->view('admin/v_sub_kategori', $data);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function tambah_kategori()
	{
		if ($this->session->userdata('akses') == '1') {
			$kat = $this->input->post('kategori');
			$this->m_sub_kategori->simpan_kategori($kat);
			redirect('admin/sub_kategori');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function edit_kategori()
	{
		if ($this->session->userdata('akses') == '1') {
			$kode = $this->input->post('kode');
			$kat = $this->input->post('kategori');
			$this->m_sub_kategori->update_kategori($kode, $kat);
			redirect('admin/sub_kategori');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function hapus_kategori()
	{
		if ($this->session->userdata('akses') == '1') {
			$kode = $this->input->post('kode');
			$this->m_sub_kategori->hapus_kategori($kode);
			redirect('admin/sub_kategori');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}
