<!-- Start single blog -->
<div class="col-md-8 col-sm-8 col-xs-12">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="blog-post-wrapper">
				<div class="post-thumbnail">
						<img src="<?php echo base_url(); ?>unggah/artikel/<?php echo $artikels->thumbnail?>" alt="">
				
				</div>
                <div class="post-information">
						<h2><?php echo $artikels->judul?></h2>
                  <div class="entry-meta">
					<span>
						<i class="fa fa-calendar"></i><?php echo datetimeIdn($artikels->dt_artikel)?>
					</span>
				</div>
					
                  <div class="entry-content">
						<?php echo $artikels->isi?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

