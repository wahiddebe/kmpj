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
                    <small>Barang Keluar</small>
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
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Tipe</th>
                            <th>Merk</th>
                            <th>Satuan</th>
                            <th>Panjang</th>
                            <th>Lebar</th>
                            <th>Tinggi</th>
                            <th>Volume</th>
                            <th>Deskripsi</th>
                            <th>Stok</th>
                            <th>Min Stok</th>
                            <th>Kategori</th>
                            <th style="width:100px;text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data->result_array() as $a) :
                            $no++;
                            $id = $a['barang_id'];
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
                            $min_stok = $a['barang_min_stok'];
                            $kat_id = $a['barang_kategori_id'];
                            $kat_nama = $a['kategori_nama'];
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no; ?></td>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $nm; ?></td>
                                <td style="text-align:center;"><?php echo $merk; ?></td>
                                <td style="text-align:center;"><?php echo $tipe; ?></td>
                                <td style="text-align:center;"><?php echo $satuan; ?></td>
                                <td style="text-align:center;"><?php echo $panjang; ?></td>
                                <td style="text-align:center;"><?php echo $lebar; ?></td>
                                <td style="text-align:center;"><?php echo $tinggi; ?></td>
                                <td style="text-align:center;"><?php echo $volume; ?></td>
                                <td style="text-align:center;"><?php echo $deskripsi; ?></td>
                                <td style="text-align:center;"><?php echo $stok; ?></td>
                                <td style="text-align:center;"><?php echo $min_stok; ?></td>
                                <td><?php echo $kat_nama; ?></td>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/barang_keluar/tambah_barang' ?>">
                        <div class="modal-body">

                            <!--<div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barang</label>
                        <div class="col-xs-9">
                            <input name="kobar" class="form-control" type="text" placeholder="Kode Barang..." style="width:335px;" required>
                        </div>
                    </div>-->

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Barang</label>
                                <div class="col-xs-9">
                                    <input name="nabar" class="form-control" type="text" placeholder="Nama Barang..." style="width:335px;" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Tipe</label>
                                <div class="col-xs-9">
                                    <input name="tipe" class="form-control" type="text" placeholder="Tipe Barang..." style="width:335px;" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Merk</label>
                                <div class="col-xs-9">
                                    <input name="merk" class="form-control" type="text" placeholder="Merk Barang..." style="width:335px;" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Deskripsi</label>
                                <div class="col-xs-9">
                                    <input name="deskripsi" class="form-control" type="text" placeholder="Deskripsi Barang..." style="width:335px;" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Kategori</label>
                                <div class="col-xs-9">
                                    <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="80%" placeholder="Pilih Kategori" required>
                                        <?php foreach ($kat2->result_array() as $k2) {
                                            $id_kat = $k2['kategori_id'];
                                            $nm_kat = $k2['kategori_nama'];
                                        ?>
                                            <option value="<?php echo $id_kat; ?>"><?php echo $nm_kat; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-xs-3">Satuan Ukuran</label>
                                <div class="col-xs-9">
                                    <select name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Satuan" data-width="80%" placeholder="Pilih Satuan" required>
                                        <option>Milimeter</option>
                                        <option>Centimeter</option>
                                        <option>Meter</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Panjang</label>
                                <div class="col-xs-9">
                                    <input name="panjang" class=" form-control" type="number" placeholder="Panjang Barang..." style="width:335px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Lebar</label>
                                <div class="col-xs-9">
                                    <input name="lebar" class=" form-control" type="number" placeholder="Lebar Barang..." style="width:335px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tinggi</label>
                                <div class="col-xs-9">
                                    <input name="tinggi" class=" form-control" type="number" placeholder="Tinggi Barang..." style="width:335px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Volume</label>
                                <div class="col-xs-9">
                                    <input name="volume" class=" form-control" type="number" placeholder="Volume Barang..." style="width:335px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Stok</label>
                                <div class="col-xs-9">
                                    <input name="stok" class="form-control" type="number" placeholder="Stok..." style="width:335px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Minimal Stok</label>
                                <div class="col-xs-9">
                                    <input name="min_stok" class="form-control" type="number" placeholder="Minimal Stok..." style="width:335px;">
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
            $id = $a['barang_id'];
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
                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/barang_keluar/edit_barang' ?>">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Kode Barang</label>
                                    <div class="col-xs-9">
                                        <input name="kobar" class="form-control" type="text" value="<?php echo $id; ?>" placeholder="Kode Barang..." style="width:335px;" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Nama Barang</label>
                                    <div class="col-xs-9">
                                        <input name="nabar" class="form-control" type="text" value="<?php echo $nm; ?>" placeholder="Nama Barang..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Tipe</label>
                                    <div class="col-xs-9">
                                        <input name="tipe" class="form-control" type="text" value="<?php echo $tipe; ?>" placeholder="Tipe..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Merk</label>
                                    <div class="col-xs-9">
                                        <input name="merk" class="form-control" type="text" value="<?php echo $merk; ?>" placeholder="Merk..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Deskripsi</label>
                                    <div class="col-xs-9">
                                        <input name="deskripsi" class="form-control" type="text" value="<?php echo $deskripsi; ?>" placeholder="Deskripsi..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Kategori</label>
                                    <div class="col-xs-9">
                                        <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="80%" placeholder="Pilih Kategori" required>
                                            <?php foreach ($kat2->result_array() as $k2) {
                                                $id_kat = $k2['kategori_id'];
                                                $nm_kat = $k2['kategori_nama'];
                                                if ($id_kat == $kat_id)
                                                    echo "<option value='$id_kat' selected>$nm_kat</option>";
                                                else
                                                    echo "<option value='$id_kat'>$nm_kat</option>";
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Satuan</label>
                                    <div class="col-xs-9">
                                        <select name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Satuan" data-width="80%" placeholder="Pilih Satuan" required>
                                            <?php if ($satuan == 'Milimeter') : ?>
                                                <option selected>Milimeter</option>
                                                <option>Centimeter</option>
                                                <option>Meter</option>
                                            <?php elseif ($satuan == 'Centimeter') : ?>
                                                <option>Milimeter</option>
                                                <option selected>Centimeter</option>
                                                <option>Meter</option>
                                            <?php else : ?>
                                                <option>Milimeter</option>
                                                <option>Centimeter</option>
                                                <option selected>Meter</option>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Panjang</label>
                                    <div class="col-xs-9">
                                        <input name="panjang" class=" form-control" type="number" value="<?php echo $panjang; ?>" placeholder="Panjang..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Lebar</label>
                                    <div class="col-xs-9">
                                        <input name="lebar" class=" form-control" type="number" value="<?php echo $lebar; ?>" placeholder="Lebar..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Tinggi</label>
                                    <div class="col-xs-9">
                                        <input name="tinggi" class=" form-control" type="number" value="<?php echo $tinggi; ?>" placeholder="Tinggi..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Volume</label>
                                    <div class="col-xs-9">
                                        <input name="volume" class=" form-control" type="number" value="<?php echo $volume; ?>" placeholder="Volume..." style="width:335px;" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Stok</label>
                                    <div class="col-xs-9">
                                        <input name="stok" class="form-control" type="number" value="<?php echo $stok; ?>" placeholder="Stok..." style="width:335px;" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3">Minimal Stok</label>
                                    <div class="col-xs-9">
                                        <input name="min_stok" class="form-control" type="number" value="<?php echo $min_stok; ?>" placeholder="Minimal Stok..." style="width:335px;" required>
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
                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/barang_keluar/hapus_barang' ?>">
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