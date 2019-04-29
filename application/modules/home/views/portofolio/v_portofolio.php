
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Bagaimana Hasil Kerja Kami?</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Development</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Design</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Photoshop</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
		  <?php foreach($portofolios as $row){?>
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url(); ?>unggah/portofolio/<?php echo $row->thumbnail?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url(); ?>unggah/portofolio/<?php echo $row->thumbnail?>">
                      <h4><?php echo $row->judul?></h4>
                      <span><?php echo substr($row->isi,0,15)?>...</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <?php }?>
          <!-- single-awesome-project end -->
        </div>
		<a href="<?php echo base_url(); ?>home/portofolio" class="pull-right">Lihat Lainnya</a>
      </div>