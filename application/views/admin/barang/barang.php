<!-- Main content -->
<div class="content-wrapper">
  <br><br><br>
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title">Tambah Barang</h5>
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="panel-body">
          <?php
          echo $this->session->flashdata('msg');
          ?>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label col-lg-2">Judul</label>
                  <div class="col-lg-10">
                    <input type="text" name="judul" class="form-control" value="" placeholder="Judul" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Kategori</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="id_kat" required>
                      <option value="">-- Pilih Kategori --</option>
                      <?php
                      foreach ($v_kat->result() as $baris) {?>
                        <option value="<?php echo $baris->id_kat; ?>"><?php echo $baris->nama_kat; ?></option>
                      <?php
                      } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Status</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="status" required>
                      <option value="">-- Pilih Status --</option>
                      <option value="DI JUAL">DI JUAL</option>
                      <option value="DI SEWA">DI SEWA</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Lokasi</label>
                  <div class="col-lg-10">
                    <textarea name="lokasi" class="form-control" rows="2" cols="80" required placeholder="Lokasi"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Luas Tanah</label>
                  <div class="col-lg-10">
                    <input type="text" name="luas_tanah" class="form-control" value="" placeholder="Luas Tanah" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Luas Bangunan</label>
                  <div class="col-lg-10">
                    <input type="text" name="luas_bangunan" class="form-control" value="" placeholder="Luas Bangunan" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Kamar Tidur</label>
                  <div class="col-lg-10">
                    <input type="text" name="kamar_tidur" class="form-control" value="" placeholder="Kamar Tidur" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Lantai</label>
                  <div class="col-lg-10">
                    <input type="text" name="lantai" class="form-control" value="" placeholder="Lantai" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Kamar Mandi</label>
                  <div class="col-lg-10">
                    <input type="text" name="kamar_mandi" class="form-control" value="" placeholder="Kamar Mandi" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Sertifikat</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="sertifikat" required>
                      <option value="">-- Pilih Sertifikat --</option>
                      <option value="hak guna bangunan">Hak Guna Bangunan</option>
                      <option value="hak milik">Hak Milik</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Listrik</label>
                  <div class="col-lg-9">
                    <input type="text" name="listrik" class="form-control" value="" placeholder="Listrik" required maxlength="300">
                  </div>
                  <div class="col-lg-1">
                    <b>watt</b>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Deskripsi</label>
                  <div class="col-lg-10">
                    <textarea name="deskripsi" class="form-control" rows="4" cols="80" placeholder="Deskripsi"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Harga</label>
                  <div class="col-lg-10">
                    <input type="number" name="harga" class="form-control" value="" placeholder="Harga" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Keterangan</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="ket" required>
                      <option value="">-- Pilih Keterangan --</option>
                      <option value="nego">Nego</option>
                      <option value="net">Net</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto" class="form-control" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 2</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto2" class="form-control" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 3</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto3" class="form-control" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 4</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto4" class="form-control" value="" required>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <hr>
            <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>

          </form>
        </div>
        <br>

        <hr>
        <div class="table-responsive">
        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Gambar</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Status</th>
              <th>Dilihat</th>
              <th>Tanggal</th>
              <th class="text-center" width="100"></th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_barang->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <td><img src="<?php echo $baris->gambar; ?>" alt="" width="100"></td>
                  <td><?php echo $baris->nama_kat; ?></td>
                  <td>Rp. <?php echo number_format($baris->harga,0,",","."); ?></td>
                  <td><?php echo $baris->status; ?></td>
                  <td><?php echo $baris->view; ?></td>
                  <td><?php echo $baris->tgl_barang; ?></td>
                  <td>
                    <a href="admin/barang_edit/<?php echo $baris->id_barang; ?>" title="Edit"><span class="icon-pencil"></span></a> &nbsp;
                    <a href="admin/barang_hapus/<?php echo $baris->id_barang; ?>" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><span class="icon-trash"></span></a>
                  </td>
                </tr>
              <?php
              $no++;
              } ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
