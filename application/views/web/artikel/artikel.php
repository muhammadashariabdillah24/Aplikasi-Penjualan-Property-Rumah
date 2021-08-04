<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-globe title-icon"></i> Artikel</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="artikel"><span class="lightblue">Artikel</span></a></div>
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
                            <?php
                            foreach ($v_artikel->result() as $baris) {?>
                              <div class="entry">
                                 <h2><i class="fa fa-arrow-right title-icon"></i> <a href="ar_d/<?php echo $baris->url; ?>"><?php echo ucwords($baris->judul); ?></a></h2>

                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="fa fa-calendar"></i> <?php echo $baris->tgl_artikel; ?> <i class="fa fa-user"></i> Admin <!--<i class="fa fa-folder-open"></i> <a href="#">General</a>--> <span class="pull-right"><i class="fa fa-eye"></i> <?php echo number_format($baris->view,0,",","."); ?> </span>
                                 </div>

                                 <!-- Thumbnail -->
                                 <div class="bthumb2">
                                    <a href="ar_d/<?php echo $baris->url; ?>"><img src="<?php echo $baris->gambar; ?>" alt="" class="img-responsive" /></a>
                                 </div>

                                 <p style="margin-top:11px;">
                                   <?php
                                         $isi = substr($baris->isi, 0, 500);
                                         // $isi = substr($baris->isi, 0,strrpos($isi," "));
                                          echo $isi;
                                   ?>... <div class=""></div>
                                 </p>

                                 <div class="clearfix"></div>

                                <a href="ar_d/<?php echo $baris->url; ?>" class="btn btn-info" style="float:right;">Selengkapnya...</a>
                                <br>
                              </div>
                            <?php
                            } ?>

                            <!-- Pagination -->
                            <div align="center">
                              <br>
                               <?php echo $halaman; ?>

                            </div>

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
