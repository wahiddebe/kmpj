<?php
class Laporan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		$this->load->model('m_suplier');
		$this->load->model('m_pembelian');
		$this->load->model('m_penjualan');
		$this->load->model('m_laporan');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$data['data'] = $this->m_barang->tampil_barang();
			$data['kat'] = $this->m_kategori->tampil_kategori();
			$data['jual_bln'] = $this->m_laporan->get_bulan_masuk();
			$data['jual_thn'] = $this->m_laporan->get_tahun_masuk();
			$data['jual_bln_keluar'] = $this->m_laporan->get_bulan_keluar();
			$data['jual_thn_keluar'] = $this->m_laporan->get_tahun_keluar();
			$this->load->view('admin/v_laporan', $data);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}

	function lap_stok_barang_keluar()
	{
		$x['data'] = $this->m_laporan->get_stok_barang_keluar();
		$this->load->view('admin/laporan/v_lap_stok_barang_keluar', $x);
	}
	function lap_stok_barang_masuk()
	{
		$x['data'] = $this->m_laporan->get_stok_barang_masuk();
		$this->load->view('admin/laporan/v_lap_stok_barang_masuk', $x);
	}
	function lap_stok_barang()
	{
		$x['data'] = $this->m_laporan->get_stok_barang();
		$this->load->view('admin/laporan/v_lap_stok_barang', $x);
	}

	function lap_masuk_pertanggal()
	{
		$tanggal = $this->input->post('tgl');
		$x['jml'] = $this->m_laporan->get_data__total_masuk_pertanggal($tanggal);
		$this->load->view('admin/laporan/v_lap_jual_pertanggal', $x);
	}
	function lap_masuk_perbulan()
	{
		$bulan = $this->input->post('bln');
		$x['jml'] = $this->m_laporan->get_total_jual_perbulan($bulan);
		$this->load->view('admin/laporan/v_lap_jual_perbulan', $x);
	}
	function lap_masuk_pertahun()
	{
		$tahun = $this->input->post('thn');
		$x['jml'] = $this->m_laporan->get_total_jual_pertahun($tahun);
		$this->load->view('admin/laporan/v_lap_jual_pertahun', $x);
	}
	function lap_keluar_pertanggal()
	{
		$tanggal = $this->input->post('tgl');
		$x['jml'] = $this->m_laporan->get_data__total_keluar_pertanggal($tanggal);
		$this->load->view('admin/laporan/v_lap_keluar_pertanggal', $x);
	}
	function lap_keluar_perbulan()
	{
		$bulan = $this->input->post('bln');
		$x['jml'] = $this->m_laporan->get_total_keluar_perbulan($bulan);
		$this->load->view('admin/laporan/v_lap_keluar_perbulan', $x);
	}
	function lap_keluar_pertahun()
	{
		$tahun = $this->input->post('thn');
		$x['jml'] = $this->m_laporan->get_total_keluar_pertahun($tahun);
		$this->load->view('admin/laporan/v_lap_keluar_pertahun', $x);
	}
}
