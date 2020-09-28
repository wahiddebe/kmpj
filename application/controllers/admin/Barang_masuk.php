<?php
class Barang_masuk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_kategori');
		$this->load->model('m_barang_masuk');
		$this->load->model('m_barang');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$data['data'] = $this->m_barang_masuk->tampil_barang();
			$data['data1'] = $this->m_barang->tampil_barang();
			$data['kat'] = $this->m_kategori->tampil_kategori();
			$data['kat2'] = $this->m_kategori->tampil_kategori();
			$this->load->view('admin/v_barang_masuk', $data);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
	function tambah_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$id = $this->m_barang_masuk->get_kobar();
			$kobar = $this->input->post('barang');
			$jumlah = $this->input->post('jumlah');
			$pembawa = $this->input->post('pembawa');
			$get_barang = $this->m_barang->get_barang($kobar);
			foreach ($get_barang->result_array() as $items) {
				$stok_lama = $items['barang_stok'];
				$stok_baru = $stok_lama + $jumlah;
				if ($stok_baru >= 0) {
					$this->m_barang_masuk->simpan_barang($id, $kobar, $jumlah, $pembawa, $stok_baru);
					redirect('admin/barang_masuk');
				} else {
					echo 'Gagal';
				}
			}
		}
		// else {
		// 	echo "Halaman tidak ditemukan";
		// }
	}
	function edit_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$id = $this->input->post('id');
			$kobar = $this->input->post('barang');
			$jumlah = $this->input->post('jumlah');
			$pembawa = $this->input->post('pembawa');
			$get_barang = $this->m_barang->get_barang($kobar);
			$get_barang_masuk = $this->m_barang_masuk->get_barang($id);
			foreach ($get_barang->result_array() as $items) {
				$stok_lama = $items['barang_stok'];
				foreach ($get_barang_masuk->result_array() as $items1) {
					$jumlah_lama = $items1['barang_jumlah'];
					if ($jumlah_lama != $jumlah) {
						$stok_baru = $stok_lama - $jumlah_lama + $jumlah;
						$this->m_barang_masuk->update_barang($id, $kobar, $jumlah, $pembawa, $stok_baru);
						redirect('admin/barang_masuk');
					} else {
						redirect('admin/barang_masuk');
					}
				}
			}
		}
	}
	function hapus_barang()
	{
		if ($this->session->userdata('akses') == '1') {
			$kode = $this->input->post('kode');
			$this->m_barang_masuk->hapus_barang($kode);
			redirect('admin/barang_masuk');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}
