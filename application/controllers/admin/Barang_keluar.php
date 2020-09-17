<?php
class Barang_keluar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_kategori');
		$this->load->model('m_barang_keluar');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$data['data'] = $this->m_barang_keluar->tampil_barang();
			$data['kat'] = $this->m_kategori->tampil_kategori();
			$data['kat2'] = $this->m_kategori->tampil_kategori();
			$this->load->view('admin/v_barang_keluar', $data);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function tambah_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$kobar = $this->m_barang_keluar->get_kobar();
			$nabar = $this->input->post('nabar');
			$kat = $this->input->post('kategori');
			$satuan = $this->input->post('satuan');
			$panjang = $this->input->post('panjang');
			$lebar = $this->input->post('lebar');
			$tinggi = $this->input->post('tinggi');
			$volume = $this->input->post('volume');
			$deskripsi = $this->input->post('deskripsi');
			$merk = $this->input->post('merk');
			$tipe = $this->input->post('tipe');
			$stok = $this->input->post('stok');
			$min_stok = $this->input->post('min_stok');
			$this->m_barang_keluar->simpan_barang($kobar, $nabar, $kat, $satuan, $panjang, $lebar, $tinggi, $volume, $merk, $tipe, $deskripsi, $stok, $min_stok);

			redirect('admin/barang_keluar');
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
			$panjang = $this->input->post('panjang');
			$lebar = $this->input->post('lebar');
			$tinggi = $this->input->post('tinggi');
			$volume = $this->input->post('volume');
			$deskripsi = $this->input->post('deskripsi');
			$merk = $this->input->post('merk');
			$tipe = $this->input->post('tipe');
			$stok = $this->input->post('stok');
			$min_stok = $this->input->post('min_stok');
			$this->m_barang_keluar->update_barang($kobar, $nabar, $kat, $satuan, $panjang, $lebar, $tinggi, $volume, $merk, $tipe, $deskripsi, $stok, $min_stok);
			redirect('admin/barang_keluar');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function hapus_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$kode = $this->input->post('kode');
			$this->m_barang_keluar->hapus_barang($kode);
			redirect('admin/barang_keluar');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}
