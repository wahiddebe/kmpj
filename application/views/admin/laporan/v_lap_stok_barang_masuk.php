<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>laporan data barang masuk</title>
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

        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
            <tr>
                <td colspan="2" style="width:800px;padding-left:20px;">
                    <center>
                        <h4>LAPORAN BARANG MASUK</h4>
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
            foreach ($data->result_array() as $d) {
                $nomor++;
                $urut++;
                if ($group == '-' || $group != $d['kategori_nama']) {
                    $kat = $d['kategori_nama'];
                    if ($group != '-')
                        echo "</table><br>";
                    echo "<table align='center' width='900px;' border='1'>";
                    echo "<tr><td colspan='14'><b>Kategori: $kat</b></td> <td style='text-align:center;'></td></tr>";
                    echo "<tr style='background-color:#ccc;'>
    <td width='4%' align='center'>No</td>
    <td width='4%' align='center'>ID</td>
    <td width='60%' align='center'>Nama Barang</td>
    <td width='60%' align='center'>Kode Barang</td>
    <td width='60%' align='center'>Tipe</td>
    <td width='60%' align='center'>Merk</td>
    <td width='60%' align='center'>Satuan</td>
    <td width='60%' align='center'>Volume</td>
    <td width='60%' align='center'>Deskripsi</td>
    <td width='60%' align='center'>Kategori</td>
    <td width='60%' align='center'>Sub Kategori</td>
    <td width='60%' align='center'>Nama Pembawa Barang</td>
    <td width='60%' align='center'>Jumlah Barang Masuk</td>
    <td width='60%' align='center'>Tanggal Input</td>
    
    </tr>";
                    $nomor = 1;
                }
                $group = $d['kategori_nama'];
                if ($urut == 500) {
                    $nomor = 0;
                    echo "<div class='pagebreak'> </div>";
                    //echo "<center><h2>KALENDER EVENTS PER TAHUN</h2></center>";
                }
            ?>
                <tr>
                    <td style="text-align:center;vertical-align:top;text-align:center;"><?php echo $nomor; ?></td>
                    <td style="vertical-align:top;padding-left:5px;"><?php echo $d['id']; ?></td>
                    <td style="vertical-align:top;padding-left:5px;"><?php echo $d['barang_nama']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_id']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_tipe']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_merk']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_satuan']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_volume']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_deskripsi']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['kategori_nama']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['sub_kategori_nama']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_pembawa']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_jumlah']; ?></td>
                    <td style="vertical-align:top;text-align:center;"><?php echo $d['barang_tgl_input']; ?></td>
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
                <td align="right"> Jepara, <?php echo date('d-M-Y') ?></td>
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