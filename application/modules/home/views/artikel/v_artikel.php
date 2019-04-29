<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="section-headline text-center">
			<h2>Tau Gak Sih?</h2>
		</div>
	</div>
</div>
<div class="row">
	<?php foreach($artikels as $row){?>
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="single-blog">
			<div class="single-blog-img">
				<a href="<?php echo base_url(); ?>assets/ebusiness/blog.html">
					<img style="height:300px;width:auto;" src="<?php echo base_url(); ?>unggah/artikel/<?php echo $row->thumbnail?>" alt="">
				</a>
			</div>
			<div class="blog-meta">
				<span class="date-type">
					<i class="fa fa-calendar"></i><?php echo datetimeidn($row->dt_artikel)?>
				</span>
			</div>
			<div class="blog-text" style="height:200px;">
				<h4>
					<a href="<?php echo base_url(); ?>assets/ebusiness/blog.html"><?php echo $row->judul ?></a>
				</h4>
				<p>
				  <?php echo substr($row->isi,0,200) ?>...
				</p>
			</div>
			<span>
				<a href="<?php echo base_url(); ?>assets/ebusiness/blog.html" class="ready-btn">Read more</a>
			</span>
		</div>
	</div>
	<?php } ?>
		<a href="<?php echo base_url(); ?>home/artikel" class="pull-right">Lihat Lainnya</a>
</div>