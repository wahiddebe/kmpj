<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">

    <title>Management data barang</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'assets/css/4-col-portfolio.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/dataTables.bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
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
                    <small>Barang Masuk</small>
                    <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Barang</a></div>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                    <thead>
                        <tr>
                            <th style="text-align:center;width:40px;">No</th>
                            <th>ID</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Tipe</th>
                            <th>Merk</th>
                            <th>Satuan</th>
                            <th>Volume</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Sub Kategori</th>
                            <th>Nama Pembawa Barang</th>
                            <th>Jumlah Barang Masuk</th>
                            <th>Tanggal Input</th>
                            <th style="width:100px;text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data->result_array() as $a) :
                            $no++;
                            $barang_id = $a['barang_id'];
                            $id = $a['id'];
                            $nm = $a['barang_nama'];
                            $satuan = $a['barang_satuan'];
                            $merk = $a['barang_merk'];
                            $tipe = $a['barang_tipe'];
                            $volume = $a['barang_volume'];
                            $deskripsi = $a['barang_deskripsi'];
                            $pemegang = $a['barang_pemegang'];
                            $pembawa = $a['barang_pembawa'];
                            $jumlah = $a['barang_jumlah'];
                            $tgl_input = $a['barang_tgl_input'];
                            $stok = $a['barang_stok'];
                            $min_stok = $a['barang_min_stok'];
                            $kat_id = $a['barang_kategori_id'];
                            $kat_nama = $a['kategori_nama'];
                            $sub_kat_nama = $a['sub_kategori_nama'];
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no; ?></td>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $barang_id; ?></td>
                                <td><?php echo $nm; ?></td>
                                <td style="text-align:center;"><?php echo $tipe; ?></td>
                                <td style="text-align:center;"><?php echo $merk; ?></td>
                                <td style="text-align:center;"><?php echo $satuan; ?></td>
                                <td style="text-align:center;"><?php echo $volume; ?></td>
                                <td style="text-align:center;"><?php echo $deskripsi; ?></td>
                                <td style="text-align:center;"><?php echo $kat_nama; ?></td>
                                <td style="text-align:center;"><?php echo $sub_kat_nama; ?></td>
                                <td style="text-align:center;"><?php echo $pembawa; ?></td>
                                <td style="text-align:center;"><?php echo $jumlah; ?></td>
                                <td><?php echo $tgl_input; ?></td>
                                <td style="text-align:center;">
                                    <a class="btn btn-xs btn-warning" href="#modalEditPelanggan<?php echo $id ?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                                    <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id ?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/barang_masuk/tambah_barang' ?>">
                        <div class="modal-body">

                            <!--<div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barang</label>
                        <div class="col-xs-9">
                            <input name="kobar" class="form-control" type="text" placeholder="Kode Barang..." style="width:335px;" required>
                        </div>
                    </div>-->

                            <div class="form-group">
                                <label class="control-label col-xs-3">Barang</label>
                                <div class="col-xs-9">
                                    <select name="barang" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Barang" data-width="80%" placeholder="Pilih Barang" required>
                                        <?php foreach ($data1->result_array() as $k2) {
                                            $barang_id = $k2['barang_id'];
                                            $barang_nama = $k2['barang_nama'];
                                        ?>
                                            <option value="<?php echo $barang_id; ?>"><?php echo $barang_nama; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jumlah</label>
                                <div class="col-xs-9">
                                    <input name="jumlah" class=" form-control" type="number" placeholder="Jumlah Barang..." style="width:335px;">
                                </div>
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ============ MODAL EDIT =============== -->
        <?php
        foreach ($data->result_array() as $a) {
            $barang_id = $a['barang_id'];
            $id = $a['id'];
            $nm = $a['barang_nama'];
            $satuan = $a['barang_satuan'];
            $panjang = $a['barang_panjang'];
            $merk = $a['barang_merk'];
            $tipe = $a['barang_tipe'];
            $lebar = $a['barang_lebar'];
            $tinggi = $a['barang_tinggi'];
            $volume = $a['barang_volume'];
            $deskripsi = $a['barang_deskripsi'];
            $stok = $a['barang_stok'];
            $jumlah = $a['barang_jumlah'];
            $min_stok = $a['barang_min_stok'];
            $kat_id = $a['barang_kategori_id'];
            $kat_nama = $a['kategori_nama'];
        ?>
            <div id="modalEditPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/barang_masuk/edit_barang' ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">ID</label>
                                    <div class="col-xs-9">
                                        <input name="id" class="form-control" type="text" value="<?php echo $id; ?>" placeholder="id..." style="width:335px;" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Kode Barang</label>
                                    <div class="col-xs-9">
                                        <input name="barang" readonly class="form-control" type="text" value="<?php echo $barang_id; ?>" placeholder="Kode Barang..." style="width:335px;" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Nama Barang</label>
                                    <div class="col-xs-9">
                                        <input name="nabar" readonly class="form-control" type="text" value="<?php echo $nm; ?>" placeholder="Nama Barang..." style="width:335px;" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Jumlah</label>
                                    <div class="col-xs-9">
                                        <input name="jumlah" value="<?= $jumlah ?>" class=" form-control" type="number" placeholder="Jumlah Barang..." style="width:335px;">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- ============ MODAL HAPUS =============== -->
        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['barang_id'];
            $nm = $a['barang_nama'];
        ?>
            <div id="modalHapusPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/barang_masuk/hapus_barang' ?>">
                            <div class="modal-body">
                                <p>Yakin mau menghapus data <?= $nm ?>..?</p>
                                <input name="kode" type="hidden" value="<?php echo $id; ?>">
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button type="submit" class="btn btn-primary">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <!--END MODAL-->

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
    <script src="<?php echo base_url() . 'assets/js/jquery.price_format.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('.harpok').priceFormat({
                prefix: '',
                //centsSeparator: '',
                centsLimit: 0,
                thousandsSeparator: ','
            });
            $('.harjul').priceFormat({
                prefix: '',
                //centsSeparator: '',
                centsLimit: 0,
                thousandsSeparator: ','
            });
        });
    </script>

</body>

</html>