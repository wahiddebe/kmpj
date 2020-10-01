<?php
class M_laporan extends CI_Model
{
	function get_stok_barang()
	{
		$hsl = $this->db->query("SELECT barang_id,barang_nama,barang_tipe,barang_merk,barang_satuan,barang_panjang,barang_lebar,barang_tinggi,barang_volume,barang_deskripsi,barang_stok,barang_min_stok,barang_pemegang,barang_kategori_id,barang_sub_kategori_id,tbl_kategori.kategori_nama AS kategori_nama,tbl_sub_kategori.kategori_nama AS sub_kategori_nama FROM tbl_barang JOIN tbl_kategori ON tbl_barang.barang_kategori_id=tbl_kategori.kategori_id JOIN tbl_sub_kategori ON tbl_barang.barang_sub_kategori_id = tbl_sub_kategori.kategori_id  ");
		return $hsl;
	}
	function get_stok_barang_keluar()
	{
		$hsl = $this->db->query("SELECT barang_keterangan,tbl_barang_keluar.barang_id as barang_id,id,tbl_barang_keluar.barang_tgl_input as barang_tgl_input,barang_pembawa,barang_nama,barang_tipe,barang_merk,barang_satuan,barang_jumlah,barang_panjang,barang_lebar,barang_tinggi,barang_volume,barang_deskripsi,barang_stok,barang_min_stok,barang_pemegang,barang_kategori_id,barang_sub_kategori_id,tbl_kategori.kategori_nama AS kategori_nama,tbl_sub_kategori.kategori_nama AS sub_kategori_nama FROM tbl_barang JOIN tbl_kategori ON tbl_barang.barang_kategori_id=tbl_kategori.kategori_id JOIN tbl_sub_kategori ON tbl_barang.barang_sub_kategori_id = tbl_sub_kategori.kategori_id join tbl_barang_keluar on tbl_barang.barang_id = tbl_barang_keluar.barang_id  ");
		return $hsl;
	}
	function get_stok_barang_masuk()
	{
		$hsl = $this->db->query("SELECT tbl_barang_masuk.barang_id as barang_id,id,tbl_barang_masuk.barang_tgl_input as barang_tgl_input,barang_pembawa,barang_nama,barang_tipe,barang_merk,barang_satuan,barang_jumlah,barang_panjang,barang_lebar,barang_tinggi,barang_volume,barang_deskripsi,barang_stok,barang_min_stok,barang_pemegang,barang_kategori_id,barang_sub_kategori_id,tbl_kategori.kategori_nama AS kategori_nama,tbl_sub_kategori.kategori_nama AS sub_kategori_nama FROM tbl_barang JOIN tbl_kategori ON tbl_barang.barang_kategori_id=tbl_kategori.kategori_id JOIN tbl_sub_kategori ON tbl_barang.barang_sub_kategori_id = tbl_sub_kategori.kategori_id join tbl_barang_masuk on tbl_barang.barang_id = tbl_barang_masuk.barang_id  ");
		return $hsl;
	}
	// function get_data_barang(){
	// 	$hsl=$this->db->query("SELECT kategori_id,barang_id,kategori_nama,barang_nama,barang_satuan,barang_harjul,barang_stok FROM tbl_kategori JOIN tbl_barang ON kategori_id=barang_kategori_id GROUP BY kategori_id,barang_nama");
	// 	return $hsl;
	// }
	// function get_data_penjualan(){
	// 	$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_total,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak ORDER BY jual_nofak DESC");
	// 	return $hsl;
	// }
	// function get_total_penjualan(){
	// 	$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,jual_total,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,sum(d_jual_total) as total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak ORDER BY jual_nofak DESC");
	// 	return $hsl;
	// }
	// function get_data_jual_pertanggal($tanggal){
	// 	$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE(jual_tanggal)='$tanggal' ORDER BY jual_nofak DESC");
	// 	return $hsl;
	// }
	function get_data__total_masuk_perkategori($subkategori)
	{
		$hsl = $this->db->query("SELECT tbl_barang_masuk.barang_id as barang_id,id,date_format(tbl_barang_masuk.barang_tgl_input,'%d %M %Y') AS barang_tgl_input,barang_pembawa,barang_nama,barang_tipe,barang_merk,barang_satuan,barang_jumlah,barang_panjang,barang_lebar,barang_tinggi,barang_volume,barang_deskripsi,barang_stok,barang_min_stok,barang_pemegang,barang_kategori_id,barang_sub_kategori_id,tbl_kategori.kategori_nama AS kategori_nama,tbl_sub_kategori.kategori_nama AS sub_kategori_nama FROM tbl_barang JOIN tbl_kategori ON tbl_barang.barang_kategori_id=tbl_kategori.kategori_id JOIN tbl_sub_kategori ON tbl_barang.barang_sub_kategori_id = tbl_sub_kategori.kategori_id join tbl_barang_masuk on tbl_barang.barang_id = tbl_barang_masuk.barang_id where tbl_barang.barang_sub_kategori_id = '$subkategori' ");
		return $hsl;
	}
	function get_data__total_keluar_perkategori($subkategori)
	{
		$hsl = $this->db->query("SELECT tbl_barang_keluar.barang_id as barang_id,id,date_format(tbl_barang_keluar.barang_tgl_input,'%d %M %Y') AS barang_tgl_input,barang_pembawa,barang_nama,barang_tipe,barang_merk,barang_satuan,barang_jumlah,barang_panjang,barang_lebar,barang_tinggi,barang_volume,barang_deskripsi,barang_stok,barang_min_stok,barang_pemegang,barang_kategori_id,barang_sub_kategori_id,tbl_kategori.kategori_nama AS kategori_nama,tbl_sub_kategori.kategori_nama AS sub_kategori_nama FROM tbl_barang JOIN tbl_kategori ON tbl_barang.barang_kategori_id=tbl_kategori.kategori_id JOIN tbl_sub_kategori ON tbl_barang.barang_sub_kategori_id = tbl_sub_kategori.kategori_id join tbl_barang_keluar on tbl_barang.barang_id = tbl_barang_keluar.barang_id where tbl_barang.barang_sub_kategori_id = '$subkategori' ");
		return $hsl;
	}
	function get_data__total_masuk_pertanggal($tanggal)
	{
		$hsl = $this->db->query("SELECT id,DATE_FORMAT(tbl_barang_masuk.barang_tgl_input,'%d %M %Y') AS barang_tanggal,tbl_sub_kategori.kategori_nama AS sub_kategori_nama,barang_nama,tbl_barang_masuk.barang_id as barang_id,barang_jumlah,barang_pembawa FROM tbl_barang_masuk JOIN tbl_barang ON tbl_barang_masuk.barang_id=tbl_barang.barang_id  WHERE DATE(tbl_barang_masuk.barang_tgl_input)='$tanggal' ORDER BY id DESC");
		return $hsl;
	}
	function get_data__total_keluar_pertanggal($tanggal)
	{
		$hsl = $this->db->query("SELECT id,DATE_FORMAT(tbl_barang_keluar.barang_tgl_input,'%d %M %Y') AS barang_tanggal,barang_nama,tbl_barang_keluar.barang_id as barang_id,barang_jumlah,barang_pembawa FROM tbl_barang_keluar JOIN tbl_barang ON tbl_barang_keluar.barang_id=tbl_barang.barang_id WHERE DATE(tbl_barang_keluar.barang_tgl_input)='$tanggal' ORDER BY id DESC");
		return $hsl;
	}
	function get_bulan_masuk()
	{
		$hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(barang_tgl_input,'%M %Y') AS bulan FROM tbl_barang_masuk");
		return $hsl;
	}
	function get_tahun_masuk()
	{
		$hsl = $this->db->query("SELECT DISTINCT YEAR(barang_tgl_input) AS tahun FROM tbl_barang_masuk");
		return $hsl;
	}
	function get_bulan_keluar()
	{
		$hsl = $this->db->query("SELECT DISTINCT DATE_FORMAT(barang_tgl_input,'%M %Y') AS bulan FROM tbl_barang_keluar");
		return $hsl;
	}
	function get_tahun_keluar()
	{
		$hsl = $this->db->query("SELECT DISTINCT YEAR(barang_tgl_input) AS tahun FROM tbl_barang_keluar");
		return $hsl;
	}
	// function get_jual_perbulan($bulan){
	// 	$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan' ORDER BY jual_nofak DESC");
	// 	return $hsl;
	// }
	function get_total_jual_perbulan($bulan)
	{
		// $hsl = $this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan' ORDER BY jual_nofak DESC");
		// return $hsl;
		$hsl = $this->db->query("SELECT id,DATE_FORMAT(tbl_barang_masuk.barang_tgl_input,'%d %M %Y') AS barang_tanggal,DATE_FORMAT(tbl_barang_masuk.barang_tgl_input,'%M %Y') AS barang_bulan,barang_nama,tbl_barang_masuk.barang_id as barang_id,barang_jumlah,barang_pembawa FROM tbl_barang_masuk JOIN tbl_barang ON tbl_barang_masuk.barang_id=tbl_barang.barang_id WHERE DATE_FORMAT(tbl_barang_masuk.barang_tgl_input, '%M %Y')='$bulan' ORDER BY id DESC");
		return $hsl;
	}
	function get_total_keluar_perbulan($bulan)
	{
		// $hsl = $this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,SUM(d_jual_total) as total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan' ORDER BY jual_nofak DESC");
		// return $hsl;
		$hsl = $this->db->query("SELECT id,DATE_FORMAT(tbl_barang_keluar.barang_tgl_input,'%d %M %Y') AS barang_tanggal,DATE_FORMAT(tbl_barang_keluar.barang_tgl_input,'%M %Y') AS barang_bulan,barang_nama,tbl_barang_keluar.barang_id as barang_id,barang_jumlah,barang_pembawa FROM tbl_barang_keluar JOIN tbl_barang ON tbl_barang_keluar.barang_id=tbl_barang.barang_id WHERE DATE_FORMAT(tbl_barang_keluar.barang_tgl_input, '%M %Y')='$bulan' ORDER BY id DESC");
		return $hsl;
	}
	// function get_jual_pertahun($tahun){
	// 	$hsl=$this->db->query("SELECT jual_nofak,YEAR(jual_tanggal) AS tahun,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE YEAR(jual_tanggal)='$tahun' ORDER BY jual_nofak DESC");
	// 	return $hsl;
	// }
	function get_total_jual_pertahun($tahun)
	{
		$hsl = $this->db->query("SELECT id,YEAR(tbl_barang_masuk.barang_tgl_input) AS barang_tahun,DATE_FORMAT(tbl_barang_masuk.barang_tgl_input,'%d %M %Y') AS barang_tanggal,DATE_FORMAT(tbl_barang_masuk.barang_tgl_input,'%M %Y') AS barang_bulan,barang_nama,tbl_barang_masuk.barang_id as barang_id,barang_jumlah,barang_pembawa FROM tbl_barang_masuk JOIN tbl_barang ON tbl_barang_masuk.barang_id=tbl_barang.barang_id WHERE YEAR(tbl_barang_masuk.barang_tgl_input)='$tahun' ORDER BY id DESC");
		return $hsl;
	}
	function get_total_keluar_pertahun($tahun)
	{
		$hsl = $this->db->query("SELECT id,YEAR(tbl_barang_keluar.barang_tgl_input) AS barang_tahun,DATE_FORMAT(tbl_barang_keluar.barang_tgl_input,'%d %M %Y') AS barang_tanggal,DATE_FORMAT(tbl_barang_keluar.barang_tgl_input,'%M %Y') AS barang_bulan,barang_nama,tbl_barang_keluar.barang_id as barang_id,barang_jumlah,barang_pembawa FROM tbl_barang_keluar JOIN tbl_barang ON tbl_barang_keluar.barang_id=tbl_barang.barang_id WHERE YEAR(tbl_barang_keluar.barang_tgl_input)='$tahun' ORDER BY id DESC");
		return $hsl;
	}
	// //=========Laporan Laba rugi============
	// function get_lap_laba_rugi($bulan){
	// 	$hsl=$this->db->query("SELECT DATE_FORMAT(jual_tanggal,'%d %M %Y %H:%i:%s') as jual_tanggal,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,(d_jual_barang_harjul-d_jual_barang_harpok) AS keunt,d_jual_qty,d_jual_diskon,((d_jual_barang_harjul-d_jual_barang_harpok)*d_jual_qty)-(d_jual_qty*d_jual_diskon) AS untung_bersih FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan'");
	// 	return $hsl;
	// }
	// function get_total_lap_laba_rugi($bulan){
	// 	$hsl=$this->db->query("SELECT DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,(d_jual_barang_harjul-d_jual_barang_harpok) AS keunt,d_jual_qty,d_jual_diskon,SUM(((d_jual_barang_harjul-d_jual_barang_harpok)*d_jual_qty)-(d_jual_qty*d_jual_diskon)) AS total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan'");
	// 	return $hsl;
	// }
}
