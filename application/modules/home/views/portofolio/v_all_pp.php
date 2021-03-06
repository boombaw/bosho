<!-- Start single blog -->
<div class="col-md-8 col-sm-8 col-xs-12">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="single-blog">
			<?php foreach($portofolios as $row){?>
				<div class="single-blog-img">
					<a href="<?php echo base_url(); ?>home/portofolio/detail/<?php echo $row->id_portofolio?>">
						<img src="<?php echo base_url(); ?>unggah/portofolio/<?php echo $row->thumbnail?>" alt="<?php echo $row->thumbnail?>">
					</a>
				</div>
				<div class="blog-meta">
					<span class="date-type">
						<i class="fa fa-calendar"></i><?php echo datetimeIdn($row->dt_portofolio)?>
					</span>
				</div>
				<div class="blog-text">
					<h4>
						<a href="<?php echo base_url(); ?>home/portofolio/detail/<?php echo $row->id_portofolio?>"><?php echo $row->judul?></a>
					</h4>
					<p>
						<?php echo substr($row->isi,0,50)?>
					</p>
				</div>
				<span>
					<a href="<?php echo base_url(); ?>home/portofolio/detail/<?php echo $row->id_portofolio?>" class="ready-btn">Read more</a>
				</span>
				<hr>
			<?php }?>
			</div>
		</div>
	</div>
</div>

