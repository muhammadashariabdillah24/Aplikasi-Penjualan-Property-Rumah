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
          <h5 class="panel-title">Edit Artikel</h5>
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
                  <label class="control-label col-lg-2">Foto</label>
                  <div class="col-lg-10">
                    <input type="file" name="foto" class="form-control" value="">
                    <i>*boleh dikosongkan jika tidak diubah</i>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Judul</label>
                  <div class="col-lg-10">
                    <input type="text" name="judul" class="form-control" value="<?php echo $v_artikel->judul; ?>" required maxlength="100">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">URL</label>
                  <div class="col-lg-10">
                    <input type="text" name="url" class="form-control" value="<?php echo $v_artikel->url; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Isi Artikel</label>
                  <div class="col-lg-10">
                    <textarea name="isi" rows="3" cols="80" class="summernote" placeholder="Isi Artikel" required><?php echo $v_artikel->isi; ?></textarea>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <hr>
            <a href="admin/artikel" class="btn btn-default">Kembali</a>
            <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>

          </form>
        </div>
        <br>

      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
