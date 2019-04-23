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
                                <small>Kontak</small>
                            </h2>
                           
                        </div>
						<div class="body">
							<form id="ktk" name="form" class ="form-horizontal" method="post" enctype="multipart/form-data">
								<div class="row clearfix js-sweetalert">
									<div class="col-sm-12">
										<div class="form-group form-float">
											<div class="form-line">
												<input type="text" id="judul" name="judul" value="" class="form-control" required >
												<label class="form-label" >Nama Alamat</label>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group form-float">
											<div class="form-line">
												<input type="email" id="email" name="email" value="" class="form-control" required >
												<label class="form-label">E Mail</label>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group form-float">
											<div class="form-line">
												<input type="text" id="tlp" name="tlp" value="" class="form-control" required >
												<label class="form-label">Telepon</label>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<div class="form-line">
												<textarea rows="1" class="form-control no-resize auto-growth" id="alamat" name="alamat" placeholder="Alamat Lengkap" required></textarea>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
									<center>
										<button type="submit" id="save"class="btn bg-deep-orange waves-effect waves-black btn-lg" data-type="success">Simpan</button>
									</center>
									</div>
								</div>
							</form>
						</div>
                    </div>
                </div>
            </div>
			
<script>
	//Set the colors we will be using ...



	$("#save").click(function(){
		if($('#judul').val() == null || $('#judul').val() == "") {
			 e.preventDefault();
		}else if($('#alamat').val() == null || $('#alamat').val() == "") {
			 e.preventDefault();
		}else if($('#email').val() == null || $('#email').val() == "") {
			 e.preventDefault();
		}else if($('#tlp').val() == null || $('#tlp').val() == "") {
			 e.preventDefault();
		}else{
					
		 $.ajax({
		   
		   url : "<?php echo base_url(); ?>dashboard/kontak/add", 
		   type: "POST",             
		   data: $("#ktk").serialize(),
			 success: function(data) {
				 document.getElementById("ktk").reset();
			}
		 });
		}
		return false; 
	 });
	
	
</script>