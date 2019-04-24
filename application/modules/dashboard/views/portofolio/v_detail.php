<div class="modal-header">
	<h4 class="modal-title" id="defaultModalLabel">Detail Portofolio | <?php echo datetimeIdn($portofolio->dt_portofolio)?>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
</div>
<div class="modal-body">
	<center>
	<b><?php echo $portofolio->judul ?><b><br>
		<img src="<?php echo base_url('unggah/portofolio/'.$portofolio->thumbnail)?>" style="max-width:300px;">
	</center><br>
	<?php echo $portofolio->isi ?>
</div>

<div class="list-unstyled row clearfix" >
	<?php echo $thumb ?>
</div>