<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="AKSANTARA">

    <title>Laporan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'assets/css/4-col-portfolio.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/dataTables.bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap-datetimepicker.min.css' ?>">
    <link href="<?php echo base_url() . 'assets/dist/css/bootstrap-select.css' ?>" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <?php
    $this->load->view('admin/menu');
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data
                    <small>Laporan</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
                    <thead>
                        <tr>
                            <th style="text-align:center;width:40px;">No</th>
                            <th>Laporan</th>
                            <th style="width:100px;text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">1</td>
                            <td style="vertical-align:middle;">Laporan Barang Masuk Keseluruhan</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="<?php echo base_url() . 'admin/laporan/lap_stok_barang_masuk' ?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">2</td>
                            <td style="vertical-align:middle;">Laporan Barang Keluar Keseluruhan</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="<?php echo base_url() . 'admin/laporan/lap_stok_barang_keluar' ?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">3</td>
                            <td style="vertical-align:middle;">Laporan Barang Gudang Keseluruhan</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="<?php echo base_url() . 'admin/laporan/lap_stok_barang' ?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">4</td>
                            <td style="vertical-align:middle;">Laporan Barang Masuk PerTanggal</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_masuk_pertanggal" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">5</td>
                            <td style="vertical-align:middle;">Laporan Barang Masuk PerBulan</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_masuk_perbulan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align:center;vertical-align:middle">6 </td>
                            <td style="vertical-align:middle;">Laporan Barang Masuk PerTahun</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_masuk_pertahun" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">7</td>
                            <td style="vertical-align:middle;">Laporan Barang Keluar PerTanggal</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_keluar_pertanggal" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">8</td>
                            <td style="vertical-align:middle;">Laporan Barang Keluar PerBulan</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_keluar_perbulan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align:center;vertical-align:middle">9 </td>
                            <td style="vertical-align:middle;">Laporan Barang Keluar PerTahun</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_keluar_pertahun" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">10</td>
                            <td style="vertical-align:middle;">Laporan Barang Masuk Per Kategori</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_masuk_perkategori" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">11</td>
                            <td style="vertical-align:middle;">Laporan Barang Keluar Perkategori</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="#lap_keluar_perkategori" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_masuk_perkategori" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Sub Kategori</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_masuk_perkategori' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal</label>
                                <div class="col-xs-9">
                                    <select name="subkategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Sub Kategori" data-width="80%" placeholder="Pilih Sub Kategori" required>
                                        <?php foreach ($kat3->result_array() as $k3) {
                                            $id_kat = $k3['kategori_id'];
                                            $nm_kat = $k3['kategori_nama'];
                                        ?>
                                            <option value="<?php echo $id_kat; ?>"><?php echo $nm_kat; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="lap_keluar_perkategori" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Sub Kategori</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_keluar_perkategori' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal</label>
                                <div class="col-xs-9">
                                    <select name="subkategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Sub Kategori" data-width="80%" placeholder="Pilih Sub Kategori" required>
                                        <?php foreach ($kat3->result_array() as $k3) {
                                            $id_kat = $k3['kategori_id'];
                                            $nm_kat = $k3['kategori_nama'];
                                        ?>
                                            <option value="<?php echo $id_kat; ?>"><?php echo $nm_kat; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="lap_masuk_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Tanggal</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_masuk_pertanggal' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal</label>
                                <div class="col-xs-9">
                                    <div class='input-group date' id='datepicker' style="width:300px;">
                                        <input type='text' name="tgl" class="form-control" value="" placeholder="Tanggal..." required />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_masuk_perbulan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Bulan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_masuk_perbulan' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Bulan</label>
                                <div class="col-xs-9">
                                    <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                    <?php foreach ($jual_bln->result_array() as $k) {
                                        $bln = $k['bulan'];
                                    ?>
                                        <option><?php echo $bln; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="lap_masuk_pertahun" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Tahun</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_masuk_pertahun' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tahun</label>
                                <div class="col-xs-9">
                                    <select name="thn" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Tahun" data-width="80%" required />
                                    <?php foreach ($jual_thn->result_array() as $t) {
                                        $thn = $t['tahun'];
                                    ?>
                                        <option><?php echo $thn; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_keluar_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Tanggal</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_keluar_pertanggal' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal</label>
                                <div class="col-xs-9">
                                    <div class='input-group date' id='datepicker2' style="width:300px;">
                                        <input type='text' name="tgl" class="form-control" value="" placeholder="Tanggal..." required />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_keluar_perbulan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Bulan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_keluar_perbulan' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Bulan</label>
                                <div class="col-xs-9">
                                    <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                    <?php foreach ($jual_bln_keluar->result_array() as $k) {
                                        $bln = $k['bulan'];
                                    ?>
                                        <option><?php echo $bln; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="lap_keluar_pertahun" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Pilih Tahun</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_keluar_pertahun' ?>" target="_blank">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tahun</label>
                                <div class="col-xs-9">
                                    <select name="thn" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Tahun" data-width="80%" required />
                                    <?php foreach ($jual_thn_keluar->result_array() as $t) {
                                        $thn = $t['tahun'];
                                    ?>
                                        <option><?php echo $thn; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:center;">Copyright &copy; <?php echo '2019'; ?> AKSANTARA</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() . 'assets/dist/js/bootstrap-select.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/dataTables.bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap-datetimepicker.min.js' ?>"></script>
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker').datetimepicker({
                format: 'DD MMMM YYYY HH:mm',
            });

            $('#datepicker').datetimepicker({
                format: 'YYYY-MM-DD',
            });
            $('#datepicker2').datetimepicker({
                format: 'YYYY-MM-DD',
            });

            $('#timepicker').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        });
    </script>

</body>

</html>