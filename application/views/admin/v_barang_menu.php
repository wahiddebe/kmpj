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
          <small>Barang Keseluruhan</small>
          <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Barang</a></div>
        </h1>
        <?php if (validation_errors() != "") { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
          </div>
        <?php } ?>

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
              <th>Sub Kategori</th>
              <th style="width:100px;text-align:center;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            foreach ($kat3->result_array() as $k3) :
              $no++;
              $id_kat = $k3['kategori_id'];
              $nm_kat = $k3['kategori_nama'];

            ?>
              <tr>
                <td style="text-align:center;"><?php echo $no; ?></td>
                <td><?php echo $nm_kat; ?></td>
                <td style="text-align:center;">
                  <a class="btn btn-xs btn-success" href="<?php echo base_url() . 'admin/barang/sub/' . $id_kat ?>"><span class="fa fa-eye"></span> Lihat</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <hr>
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/barang/tambah_barang' ?>">
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
                  <input name="tipe" class="form-control" type="text" placeholder="Tipe Barang..." style="width:335px;">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-3">Merk</label>
                <div class="col-xs-9">
                  <input name="merk" class="form-control" type="text" placeholder="Merk Barang..." style="width:335px;">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-3">Deskripsi</label>
                <div class="col-xs-9">
                  <input name="deskripsi" class="form-control" type="text" placeholder="Deskripsi Barang..." style="width:335px;">
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
                <label class="control-label col-xs-3">Sub Kategori</label>
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



              <div class="form-group">
                <label class="control-label col-xs-3">Satuan</label>
                <div class="col-xs-9">
                  <select name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Satuan" data-width="80%" placeholder="Pilih Satuan" required>

                    <option>Centimeter</option>
                    <option>Meter</option>
                    <option>Dus</option>
                    <option>Ikat</option>
                    <option>Kaleng</option>
                    <option>Kg</option>
                    <option>Lembar</option>
                    <option>Liter</option>
                    <option>Pack</option>
                    <option>pcs</option>
                    <option>Roll</option>
                    <option>Set</option>
                    <option>Tabung</option>
                    <option>Unit</option>
                    <option>BA</option>
                    <option>Kosong</option>
                  </select>
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
              <div class="form-group">
                <label class="control-label col-xs-3">Nama Pemegang Barang</label>
                <div class="col-xs-9">
                  <input name="pemegang" required class="form-control" type="text" placeholder="Nama Pemegang Barang..." style="width:335px;">
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