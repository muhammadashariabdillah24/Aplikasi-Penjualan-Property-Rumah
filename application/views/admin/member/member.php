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
          <h5 class="panel-title">Member</h5>
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
        <div class="table-responsive">
        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No HP</th>
              <th>Tanggal Daftar</th>
              <th>Terakhir Login</th>
              <!-- <th class="text-center" width="100"></th> -->
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_member->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <td><?php echo $baris->nama; ?></td>
                  <td><?php echo $baris->email; ?></td>
                  <td><?php echo $baris->no_hp; ?></td>
                  <td><?php echo $baris->tgl_daftar; ?></td>
                  <td><?php echo $baris->terakhir_login; ?></td>
                  <!-- <td>
                    <a href="admin/kontak_hapus/<?php echo $baris->id_member; ?>" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><span class="icon-trash"></span></a>
                  </td> -->
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
