<?php
class Barang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_kategori');
		$this->load->model('m_sub_kategori');
		$this->load->model('m_barang');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$data['data'] = $this->m_barang->tampil_barang();
			$data['kat2'] = $this->m_kategori->tampil_kategori();
			$data['kat3'] = $this->m_sub_kategori->tampil_kategori();
			$this->load->view('admin/v_barang', $data);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function tambah_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$kobar = $this->m_barang->get_kobar();
			$nabar = $this->input->post('nabar');
			$kat = $this->input->post('kategori');
			$subkat = $this->input->post('subkategori');
			$pemegang = $this->input->post('pemegang');
			$satuan = $this->input->post('satuan');
			$volume = $this->input->post('volume');
			$deskripsi = $this->input->post('deskripsi');
			$merk = $this->input->post('merk');
			$tipe = $this->input->post('tipe');
			$stok = $this->input->post('stok');
			$min_stok = $this->input->post('min_stok');
			$this->m_barang->simpan_barang($kobar, $nabar, $kat, $satuan, $pemegang, $subkat, $volume, $merk, $tipe, $deskripsi, $stok, $min_stok);

			redirect('admin/barang');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function edit_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$kobar = $this->input->post('kobar');
			$nabar = $this->input->post('nabar');
			$kat = $this->input->post('kategori');
			$satuan = $this->input->post('satuan');
			$subkat = $this->input->post('subkategori');
			$pemegang = $this->input->post('pemegang');
			$volume = $this->input->post('volume');
			$deskripsi = $this->input->post('deskripsi');
			$merk = $this->input->post('merk');
			$tipe = $this->input->post('tipe');
			$stok = $this->input->post('stok');
			$min_stok = $this->input->post('min_stok');
			$this->m_barang->update_barang($kobar, $nabar, $kat, $satuan, $pemegang, $subkat, $volume, $merk, $tipe, $deskripsi, $stok, $min_stok);
			redirect('admin/barang');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function hapus_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$kode = $this->input->post('kode');
			$this->m_barang->hapus_barang($kode);
			redirect('admin/barang');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}
