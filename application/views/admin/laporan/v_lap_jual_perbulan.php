<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>Laporan Barang Masuk Perbulan</title>
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
                <td colspan="2" style="width:800px;paddin-left:20px;">
                    <center>
                        <h4>LAPORAN BARANG MASUK PERBULAN</h4>
                    </center><br />
                </td>
            </tr>

        </table>

        <table border="0" align="center" style="width:900px;border:none;">
            <tr>
                <th style="text-align:left"></th>
            </tr>
        </table>
        <?php
        $b = $jml->row_array();
        ?>
        <table border="1" align="center" style="width:900px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th colspan="11" style="text-align:left;">Bulan : <?php echo $b['barang_bulan']; ?></th>
                </tr>
                <tr>
                    <th style="width:50px;">No</th>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang Masuk</th>
                    <th>Orang Yang Membawa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($jml->result_array() as $i) {
                    $no++;
                    $id = $i['id'];
                    $tgl = $i['barang_tanggal'];
                    $kobar = $i['barang_id'];

                    $nabar = $i['barang_nama'];
                    $jumlah = $i['barang_jumlah'];

                    $pembawa = $i['barang_pembawa'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no; ?></td>
                        <td style="padding-left:5px;"><?php echo $id; ?></td>
                        <td style="text-align:center;"><?php echo $tgl; ?></td>
                        <td style="text-align:center;"><?php echo $kobar; ?></td>
                        <td style="text-align:left;"><?php echo $nabar; ?></td>
                        <td style="text-align:left;"><?php echo $jumlah; ?></td>
                        <td style="text-align:left;"><?php echo $pembawa; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
            </tfoot>
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