<?php
class M_barang_masuk extends CI_Model
{

	function hapus_barang($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_barang_masuk where barang_id='$kode' ");
		return $hsl;
	}

	function update_barang($id, $kobar, $jumlah, $stok_baru)
	{
		$user_id = $this->session->userdata('idadmin');
		$hsl = $this->db->query("UPDATE tbl_barang_masuk SET barang_jumlah='$jumlah', barang_user_id='$user_id' WHERE id='$id'");

		$hs2 = $this->db->query("UPDATE tbl_barang SET barang_stok='$stok_baru', barang_user_id='$user_id' WHERE barang_id='$kobar'");
		return $hs2;
		return $hsl;
	}

	function tampil_barang()
	{
		$hsl = $this->db->query("SELECT id,barang_id,barang_jumlah,barang_nama,barang_tipe,barang_merk,barang_satuan,barang_panjang,barang_lebar,barang_tinggi,barang_volume,barang_deskripsi,barang_stok,barang_min_stok,barang_kategori_id,kategori_nama FROM tbl_barang_masuk JOIN tbl_kategori ON barang_kategori_id=kategori_id");
		return $hsl;
	}

	function simpan_barang($id, $kobar, $jumlah, $nabar, $kat, $satuan, $panjang, $lebar, $tinggi, $volume, $merk, $tipe, $deskripsi, $stok_baru)
	{
		$user_id = $this->session->userdata('idadmin');
		$hsl = $this->db->query("INSERT INTO tbl_barang_masuk (id,barang_id,barang_jumlah,barang_nama,barang_satuan,barang_panjang,barang_lebar,barang_tinggi,barang_volume,barang_merk,barang_tipe,barang_deskripsi,barang_kategori_id,barang_user_id) VALUES ('$id','$kobar','$jumlah','$nabar','$satuan','$panjang','$lebar','$tinggi', '$volume', '$merk', '$tipe', '$deskripsi','$kat','$user_id')");

		$hsl2 = $this->db->query("UPDATE tbl_barang SET barang_stok='$stok_baru' where barang_id='$kobar'");
		return $hsl2;
		return $hsl;
	}


	function get_barang($kobar)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_barang_masuk where id='$kobar'");
		return $hsl;
	}

	function get_kobar()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id,6)) AS kd_max FROM tbl_barang_masuk");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "BRMasuk" . $kd;
	}
}
