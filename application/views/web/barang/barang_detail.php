<?php
$baris = $v_barang->row();
if ($baris->id_barang == '') {
  redirect('error_not_found');
}?>
<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-dropbox title-icon"></i> <?php echo ucwords($baris->judul); ?></h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <span class="lightblue"><?php echo $baris->judul; ?></span></a></div>
      </div>
    </div>
  </div>
</div>
<!-- Page heading ends -->

<!-- Content starts -->
<div class="content">
  <div class="container">

    <div class="blog">
             <div class="row">
                <div class="col-md-12">

                   <!-- Blog Posts -->
                   <div class="row">
                      <div class="col-md-8 col-sm-8">
                         <div class="posts">

                            <!-- Each posts should be enclosed inside "entry" class" -->
                            <!-- Post one -->
                            <div class="entry">
                               <h2><i class="fa fa-arrow-right title-icon"></i> <a href="#"><?php echo ucwords($baris->judul); ?></a></h2>

                               <!-- Meta details -->
                               <div class="meta">
                                  <i class="fa fa-calendar"></i> <?php echo $baris->tgl_barang; ?> <i class="fa fa-user"></i> Admin <!--<i class="fa fa-folder-open"></i> <a href="#">General</a>--> <span class="pull-right"><i class="fa fa-eye"></i> <?php echo number_format($baris->view,0,",","."); ?> </span>
                               </div>

                               <!-- Thumbnail -->
                               <div align="center">
                                 <div class="gallery">
                                  <?php
                                  if($baris->gambar != ''){ ?>
                                  <a href="<?php echo $baris->gambar; ?>" data-fancybox="<?php echo $baris->id_barang; ?>" data-caption="<?php echo $baris->judul; ?>" >
       														    <img src="<?php echo $baris->gambar; ?>" alt="<?php echo $baris->judul; ?>" class="img-responsive" style="width:300px;max-width:300px;height:200px;"/>
                                  </a>
                                  <?php
                                  }

                                  if($baris->gambar2 != ''){?>
                                  <a href="<?php echo $baris->gambar2; ?>" data-fancybox="<?php echo $baris->id_barang; ?>" data-caption="<?php echo $baris->judul; ?>" >
       														    <img src="<?php echo $baris->gambar2; ?>" alt="<?php echo $baris->judul; ?>" class="img-responsive" style="width:300px;max-width:300px;height:200px;"/>
                                  </a>
                                  <?php
                                  }

                                  if($baris->gambar3 != ''){?>
                                  <a href="<?php echo $baris->gambar3; ?>" data-fancybox="<?php echo $baris->id_barang; ?>" data-caption="<?php echo $baris->judul; ?>" >
       														    <img src="<?php echo $baris->gambar3; ?>" alt="<?php echo $baris->judul; ?>" class="img-responsive" style="width:300px;max-width:300px;height:200px;"/>
                                  </a>
                                  <?php
                                  }

                                  if($baris->gambar4 != ''){?>
                                  <a href="<?php echo $baris->gambar4; ?>" data-fancybox="<?php echo $baris->id_barang; ?>" data-caption="<?php echo $baris->judul; ?>" >
       														    <img src="<?php echo $baris->gambar4; ?>" alt="<?php echo $baris->judul; ?>" class="img-responsive" style="width:300px;max-width:300px;height:200px;"/>
                                  </a>
                                  <?php
                                  }?>
                                 </div>
                                  <b><i class="fa fa-home"></i> </b> <?php echo $baris->judul; ?><br>
                               </div>
                               <br>

                               <table class="table table-bordered table-striped">
                                 <tr>
                                   <td width="130">Kategori</td>
                                   <td><b><?php echo $baris->nama_kat; ?></b></td>
                                 </tr>
                                 <tr>
                                   <td>Status</td>
                                   <td><label class="label label-success"><?php echo $baris->status; ?></label></td>
                                 </tr>
                                 <tr>
                                   <td>Lokasi</td>
                                   <td><?php echo $baris->lokasi; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Luas Tanah</td>
                                   <td><?php echo $baris->luas_tanah; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Luas Bangunan</td>
                                   <td><?php echo $baris->luas_bangunan; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Kamar Tidur</td>
                                   <td><?php echo $baris->kamar_tidur; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Lantai</td>
                                   <td><?php echo $baris->lantai; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Kamar Mandi</td>
                                   <td><?php echo $baris->kamar_mandi; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Sertifikat</td>
                                   <td><b><?php echo strtoupper($baris->sertifikat); ?></b></td>
                                 </tr>
                                 <tr>
                                   <td>listrik</td>
                                   <td><?php echo $baris->listrik; ?> watt</td>
                                 </tr>
                                 <tr>
                                   <td>Harga</td>
                                   <td><b>Rp. <?php echo number_format($baris->harga,0,",","."); ?></b></td>
                                 </tr>
                                 <tr>
                                   <td>Keterangan</td>
                                   <td><b><?php echo strtoupper($baris->ket); ?></b></td>
                                 </tr>
                                 <tr>
                                   <td>Tanggal</td>
                                   <td><?php echo $this->Mcrud->tgl_id(date('Y-m-d', strtotime($baris->tgl_barang))); ?></td>
                                 </tr>
                                 <tr>
                                   <td>Deskripsi</td>
                                   <td><?php echo $baris->deskripsi; ?></td>
                                 </tr>
                               </table>

                               <div class="clearfix"></div>

                            </div>

                            <div id="disqus_thread"></div>
                            <script>

                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://hostqu.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).barangendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                            <div class="clearfix"></div>

                         </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                         <?php $this->load->view('web/widget2'); ?>
                      </div>
                   </div>



                </div>
             </div>
          </div>

  </div>
</div>
<!-- Content ends -->
