
<div class="block-header">
	<h2>Pengaturan</h2>
</div>
<!-- Input -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Pengaturan Klien
				</h2>
			</div>
			<div class="body">
				<form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
					<div class="dz-message">
						<div class="drag-icon-cph">
							<i class="material-icons">touch_app</i>
						</div>
						<h3>Drop files here or click to upload.</h3>
						<em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Daftar Klien
				<button data-toggle="tooltip" title="Refresh" data-placement="left" id="munculin" class="pull-right btn btn-sm btn-info waves-effect waves-light"><i class="material-icons">update</i>
				</button>
				</h2>
			</div>
			<div >
				<div id="aniimated-thumbnials" class="list-unstyled row clearfix" >
					
				</div>
			</div>
		</div>
	</div>
</div>

<script>
if (window.location.host == 'localhost'){
		var get_url = window.location;
		var base = get_url.protocol+'//'+get_url.host+'/bosho1';
	} else {
		var base = window.location.origin;
	}

	function cek(){ //function untuk mengecek pesan 
		$.ajax({
			type: "POST",
			url: base+"/dashboard/klien/index1", //script php untuk mengecek pesan, didalamnya berupa query select
			cache: false,
			dataType: "HTML",
			success: function(msg){ 
				$("#aniimated-thumbnials").html(msg);
			}
		});
	}
	$("#munculin").on("click", function(e) {
		cek();
	});
	cek();
</script>