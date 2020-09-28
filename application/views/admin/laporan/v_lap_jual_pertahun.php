<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>laporan barang masuk pertahun</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css') ?>" />
</head>

<body onload="window.print()">
    <div id="laporan">
        <table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
            <!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
        </table>
        <?php
        $b = $jml->row_array();
        ?>

        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
            <tr>
                <td colspan="2" style="width:800px;padding-left:20px;">
                    <center>
                        <h4>LAPORAN BARANG MASUK TAHUN <?php echo $b['barang_tahun']; ?></h4>
                    </center><br />
                </td>
            </tr>

        </table>

        <table border="0" align="center" style="width:900px;border:none;">
            <tr>
                <th style="text-align:left"></th>
            </tr>
        </table>

        <table border="1" align="center" style="width:900px;margin-bottom:20px;">
            <?php
            $urut = 0;
            $nomor = 0;
            $group = '-';
            foreach ($jml->result_array() as $d) {
                $nomor++;
                $urut++;
                if ($group == '-' || $group != $d['barang_bulan']) {
                    $bulan = $d['barang_bulan'];
                    // $query = $this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,SUM(d_jual_total) AS total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan'");
                    // $t = $query->row_array();
                    // $tots = $t['total'];
                    if ($group != '-')
                        echo "</table><br>";
                    echo "<table align='center' width='900px;' border='1'>";
                    echo "<tr><td colspan='8'><b>Bulan: $bulan</b></td>";
                    echo "<tr style='background-color:#ccc;'>
    <td width='3%' align='center'>No</td>
    <td>ID</td>
    <td>Tanggal</td>
    <td>Kode Barang</td>
    <td>Nama Barang</td>
    <td>Jumlah Barang Masuk</td>
    <td>Orang Yang Membawa</td>
    
    </tr>";
                    $nomor = 1;
                }
                $group = $d['barang_bulan'];
                if ($urut == 500) {
                    $nomor = 0;
                    echo "<div class='pagebreak'> </div>";
                    //echo "<center><h2>KALENDER EVENTS PER TAHUN</h2></center>";
                }
            ?>
                <tr>
                    <td style="text-align:center;vertical-align:top;text-align:center;"><?php echo $nomor; ?></td>
                    <td style="vertical-align:top;padding-left:5px;"><?php echo $d['id']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_tanggal']; ?></td>
                    <td style="vertical-align:top;padding-left:5px;"><?php echo $d['barang_id']; ?></td>
                    <td style="vertical-align:top;padding-left:5px;"><?php echo $d['barang_nama']; ?></td>
                    <td style="vertical-align:top;padding-left:5px;"><?php echo $d['barang_jumlah']; ?></td>
                    <td style="vertical-align:top;padding-left:5px;"><?php echo $d['barang_pembawa']; ?></td>
                </tr>


            <?php
            }
            ?>
        </table>

        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td></td>
        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td align="right">Jepara, <?php echo date('d-M-Y') ?></td>
            </tr>
            <tr>
                <td align="right"></td>
            </tr>

            <tr>
                <td><br /><br /><br /><br /></td>
            </tr>
            <tr>
                <td align="right">( <?php echo $this->session->userdata('nama'); ?> )</td>
            </tr>
            <tr>
                <td align="center"></td>
            </tr>
        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <th><br /><br /></th>
            </tr>
            <tr>
                <th align="left"></th>
            </tr>
        </table>
    </div>
</body>

</html>