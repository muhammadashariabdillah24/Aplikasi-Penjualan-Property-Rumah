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
          <h5 class="panel-title">Edit Barang</h5>
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
                    <input type="text" name="judul" class="form-control" value="<?php echo $v_barang->judul; ?>" placeholder="Judul" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Kategori</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="id_kat" required>
                      <option value="">-- Pilih Kategori --</option>
                      <?php
                      foreach ($v_kat->result() as $baris) {?>
                        <option value="<?php echo $baris->id_kat; ?>" <?php if($v_barang->id_kat==$baris->id_kat){echo "selected";} ?>><?php echo $baris->nama_kat; ?></option>
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
                      <option value="DI JUAL" <?php if($v_barang->status=='DI JUAL'){echo "selected";} ?>>DI JUAL</option>
                      <option value="DI SEWA" <?php if($v_barang->status=='DI SEWA'){echo "selected";} ?>>DI SEWA</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Lokasi</label>
                  <div class="col-lg-10">
                    <textarea name="lokasi" class="form-control" rows="2" cols="80" required placeholder="Lokasi"><?php echo $v_barang->lokasi; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Luas Tanah</label>
                  <div class="col-lg-10">
                    <input type="text" name="luas_tanah" class="form-control" value="<?php echo $v_barang->luas_tanah; ?>" placeholder="Luas Tanah" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Luas Bangunan</label>
                  <div class="col-lg-10">
                    <input type="text" name="luas_bangunan" class="form-control" value="<?php echo $v_barang->luas_bangunan; ?>" placeholder="Luas Bangunan" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Kamar Tidur</label>
                  <div class="col-lg-10">
                    <input type="text" name="kamar_tidur" class="form-control" value="<?php echo $v_barang->kamar_tidur; ?>" placeholder="Kamar Tidur" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Lantai</label>
                  <div class="col-lg-10">
                    <input type="text" name="lantai" class="form-control" value="<?php echo $v_barang->lantai; ?>" placeholder="Lantai" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Kamar Mandi</label>
                  <div class="col-lg-10">
                    <input type="text" name="kamar_mandi" class="form-control" value="<?php echo $v_barang->kamar_mandi; ?>" placeholder="Kamar Mandi" required maxlength="300">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Sertifikat</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="sertifikat" required>
                      <option value="">-- Pilih Sertifikat --</option>
                      <option value="hak guna bangunan" <?php if($v_barang->sertifikat == 'hak guna bangunan'){echo "selected";} ?>>Hak Guna Bangunan</option>
                      <option value="hak milik" <?php if($v_barang->sertifikat == 'hak milik'){echo "selected";} ?>>Hak Milik</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Listrik</label>
                  <div class="col-lg-9">
                    <input type="text" name="listrik" class="form-control" value="<?php echo $v_barang->listrik; ?>" placeholder="Listrik" required maxlength="300">
                  </div>
                  <div class="col-lg-1">
                    <b>watt</b>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Deskripsi</label>
                  <div class="col-lg-10">
                    <textarea name="deskripsi" class="form-control" rows="4" cols="80" placeholder="Deskripsi"><?php echo $v_barang->deskripsi; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Harga</label>
                  <div class="col-lg-10">
                    <input type="number" name="harga" class="form-control" value="<?php echo $v_barang->harga; ?>" placeholder="Harga" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Keterangan</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="ket" required>
                      <option value="">-- Pilih Keterangan --</option>
                      <option value="nego" <?php if($v_barang->ket=='nego'){echo "selected";} ?>>Nego</option>
                      <option value="net" <?php if($v_barang->ket=='net'){echo "selected";} ?>>Net</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto" class="form-control" value="">
                    <i>*boleh dikosongkan jika tidak diubah</i>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 2</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto2" class="form-control" value="">
                    <i>*boleh dikosongkan jika tidak diubah</i>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 3</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto3" class="form-control" value="">
                    <i>*boleh dikosongkan jika tidak diubah</i>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Gambar 4</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto4" class="form-control" value="">
                    <i>*boleh dikosongkan jika tidak diubah</i>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <hr>
            <a href="admin/barang" class="btn btn-default">Kembali</a>
            <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>

          </form>
        </div>
        <br>

      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
