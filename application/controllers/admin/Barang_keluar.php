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
		$this->load->model('m_barang');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$data['data'] = $this->m_barang_keluar->tampil_barang();
			$data['data1'] = $this->m_barang->tampil_barang();
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
			$id = $this->m_barang_keluar->get_kobar();
			$kobar = $this->input->post('barang');
			$jumlah = $this->input->post('jumlah');
			$pembawa = $this->input->post('pembawa');
			$keterangan = $this->input->post('keterangan');
			$get_barang = $this->m_barang->get_barang($kobar);
			foreach ($get_barang->result_array() as $items) {
				$stok_lama = $items['barang_stok'];
				$stok_baru = $stok_lama - $jumlah;
				if ($stok_baru >= 0) {
					$this->m_barang_keluar->simpan_barang($id, $kobar, $jumlah, $pembawa, $keterangan, $stok_baru);
					$this->session->set_flashdata('pesan', 'Data Berhasil Disimpan :)');
					redirect('admin/barang_keluar');
				} else {
					$this->session->set_flashdata('pesan', 'Stok Kurang :(');
					redirect('admin/barang_keluar');
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
			$keterangan = $this->input->post('keterangan');
			$get_barang = $this->m_barang->get_barang($kobar);
			$get_barang_keluar = $this->m_barang_keluar->get_barang($id);
			foreach ($get_barang->result_array() as $items) {
				$stok_lama = $items['barang_stok'];
				foreach ($get_barang_keluar->result_array() as $items1) {
					$jumlah_lama = $items1['barang_jumlah'];
					if ($jumlah_lama != $jumlah) {
						$stok_baru = $stok_lama + $jumlah_lama - $jumlah;
						$this->m_barang_keluar->update_barang($id, $kobar, $jumlah, $pembawa, $keterangan, $stok_baru);
						redirect('admin/barang_keluar');
					} else {
						redirect('admin/barang_keluar');
					}
				}
			}
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
