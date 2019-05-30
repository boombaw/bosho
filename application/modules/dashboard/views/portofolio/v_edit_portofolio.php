<div class="block-header">
	<h2>Pengaturan</h2>
</div>
<!-- Input -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Edit
					<small>Portofolio</small>
				</h2>
			</div>
			<div class="body">
				<form id="formeport" name="form" class ="form-horizontal" method="post" action="<?php echo base_url()?>dashboard/artikel/update" enctype="multipart/form-data" eid="<?php echo $this->uri->segment(4)?>">
					<div class="row clearfix js-sweetalert">
						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" id="judul" name="judul" value="<?php echo $portofolio->judul ?>" class="form-control" required >
									<input type="hidden" name="asd" value="<?php echo $portofolio->id_portofolio ?>">
									<label class="form-label" >Judul</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<textarea id="editor2" class="form-control col-md-7 col-xs-12" name="isi" required><?php echo htmlspecialchars($portofolio->isi) ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="file" id="thumb" name="files" value="" class="form-control-file" required>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group form-float">
								<label for="">Galery</label>
								<div class="form-inline">
									<div class="list-unstyled row clearfix" id="a-thumbnials">
										<?php echo $thumb ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="dropzone" id="edit_pdropzone">
									<div class="dz-message">
										<h3> Klik atau Drop file disini untuk menambah galery portofolio</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="e-metad" name="metad" value="<?php echo $portofolio->metad ?>" maxlength="150">
									<label class="form-label" >Meta Deskripsi</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group demo-tagsinput-area">
								<div class="form-line">
									<input type="text" class="form-control" id="e-tag" name="tag" data-role="tagsinput" value="<?php echo $portofolio->tag ?>" placeholder="Tag (pisahkan dengan koma)">
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<center>
								<button type="submit" id="editport" class="btn bg-deep-orange waves-effect waves-black btn-lg">Simpan</button>
							</center>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Ckeditor -->
<script src="<?php echo base_url();?>assets/adminbsb/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'editor2' , {
		filebrowserBrowseUrl : '<?php echo base_url();?>assets/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserUploadUrl : '<?php echo base_url();?>assets/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='});
	$(".rem-image-port").click(function (e) {
		e.preventDefault();
		// Get token 
		var token = $(this).attr('data-attr');
		var pid = $(this).attr('data-pid');
		// Confirm to delete
		var r = confirm('Ingin menghapus gambar ini ?');
		// Cek result confirm
		if (r) {
			$.ajax({
				type:"post",
				data:{token:token},
				url: base_url+"/dashboard/portofolio/remove_foto_g",
				cache:false,
				dataType: 'json',
				success: function(){
					alert("Foto terhapus");
					$("#a-thumbnials").empty(""); 
					$.ajax({
						type: "POST",
						url: "<?php echo base_url() ?>/dashboard/portofolio/tport", 
						data:{token:pid},
						cache: false,
						dataType: "HTML",
						success: function(msg){ 
							// $("#a-thumbnials").html(msg);
							location.reload(true)
						}
					});
				},
				error: function(){
					alert("Error");

				}
			});
		}
	})
</script>