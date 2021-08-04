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
          <h5 class="panel-title">Tambah Artikel</h5>
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
                    <input type="file" name="foto" class="form-control" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Judul</label>
                  <div class="col-lg-10">
                    <input type="text" name="judul" class="form-control" value="" placeholder="Judul Artikel" required maxlength="100">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">URL</label>
                  <div class="col-lg-10">
                    <input type="text" name="url" class="form-control" value="" placeholder="URL" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Isi Artikel</label>
                  <div class="col-lg-10">
                    <textarea name="isi" rows="3" cols="80" class="summernote" placeholder="Isi Artikel" required></textarea>
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
              <th>Foto</th>
              <th>Judul Artikel</th>
              <th>Isi Artikel</th>
              <th>Dilihat</th>
              <th>Tanggal</th>
              <th class="text-center" width="100"></th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_artikel->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <td><img src="<?php echo $baris->gambar; ?>" alt="" width="100"></td>
                  <td><?php echo $baris->judul; ?></td>
                  <td>
                    <?php
                          $isi = substr($baris->isi, 0, 500);
                          // $isi = substr($baris->isi, 0,strrpos($isi," "));
                           echo $isi;
                    ?>... <div class=""></div>
                  </td>
                  <td><?php echo $baris->view; ?></td>
                  <td><?php echo $baris->tgl_artikel; ?></td>
                  <td>
                    <a href="admin/artikel_edit/<?php echo $baris->id_artikel; ?>" title="Edit"><span class="icon-pencil"></span></a> &nbsp;
                    <a href="admin/artikel_hapus/<?php echo $baris->id_artikel; ?>" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><span class="icon-trash"></span></a>
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
