<div class="block-header">
	<h2>Pengaturan</h2>
</div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah
                                <small>Artikel</small>
                            </h2>
                           
                        </div>
						<div class="body">
							<form id="form" name="form" class ="form-horizontal" method="post" action="<?php echo base_url()?>dashboard/artikel/add" enctype="multipart/form-data" >
								<div class="row clearfix js-sweetalert">
									<div class="col-sm-12">
										<div class="form-group form-float">
											<div class="form-line">
												<input type="text" id="judul" name="judul" value="" class="form-control" required >
												<label class="form-label" >Judul</label>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group form-float">
											<div class="form-line">
												<textarea id="editor1" class="form-control col-md-7 col-xs-12" name="isi" required></textarea>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group form-float">
											<div class="form-line">
												<input type="file" id="thumb" name="files" value="" class="form-control-file" required  >
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group form-float">
											<div class="form-line">
												<input type="text" class="form-control" name="metad" value="" maxlength="150">
												<label class="form-label" >Meta Deskripsi (max. 150 Karakter)</label>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group demo-tagsinput-area">
											<div class="form-line">
												<input type="text" class="form-control" name="tag" data-role="tagsinput" value="" placeholder="Tag (pisahkan dengan koma)">
											</div>
										</div>
									</div>
									<div class="col-sm-12">
									<center>
										<button type="submit" id="save" class="btn bg-deep-orange waves-effect waves-black btn-lg">Simpan</button>
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
	CKEDITOR.replace( 'editor1' , {
		filebrowserBrowseUrl : '<?php echo base_url();?>assets/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserUploadUrl : '<?php echo base_url();?>assets/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
		filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='});
		
</script>