<!-- Start single blog -->
<div class="col-md-8 col-sm-8 col-xs-12">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="blog-post-wrapper">
				<div class="post-thumbnail">
						<img src="<?php echo base_url(); ?>unggah/portofolio/<?php echo $portofolios->thumbnail?>" alt="">
				
				</div>
                <div class="post-information">
						<h2><?php echo $portofolios->judul?></h2>
                  <div class="entry-meta">
					<span>
						<i class="fa fa-calendar"></i><?php echo datetimeIdn($portofolios->dt_portofolio)?>
					</span>
				</div>
					
                  <div class="entry-content">
						<?php echo $portofolios->isi?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

