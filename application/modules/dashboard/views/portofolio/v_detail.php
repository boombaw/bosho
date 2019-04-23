<div class="modal-header">
	<h4 class="modal-title" id="defaultModalLabel">Detail Artikel | <?php echo datetimeIdn($artikel->dt_artikel)?>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
</div>
<div class="modal-body">
<center>
	<b><?php echo $artikel->judul ?><b><br>
<img src="<?php echo base_url('unggah/artikel/'.$artikel->thumbnail)?>" style="max-width:300px;">
</center><br>
<?php echo $artikel->isi ?>
</div>