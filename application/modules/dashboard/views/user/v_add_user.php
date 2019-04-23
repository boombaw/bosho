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
					<small>Pengguna</small>
				</h2>

			</div>
			<div class="body">
				<form id="form" name="form" class ="form-horizontal" method="post" enctype="multipart/form-data"  onsubmit="required()">
					<div class="row clearfix js-sweetalert">
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" id="nama" name="nama" value="" class="form-control" required >
									<label class="form-label" >Nama</label>
								</div><div id="msgnm"></div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input id="username" type="text" name="username" class="form-control" required >
									<input id="alert" type="hidden">
									<label class="form-label">Username</label>
								</div><div id="msg"></div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="password" id="password"  name="password" value="" class="form-control" required >
									<label class="form-label">Password</label>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="password" id="konfpass" onkeyup="cekPass(); return false;" value="" class="form-control" required >
									<input id="alert2" type="hidden">
									<label class="form-label">Konfirmasi Password</label>
								</div><span id="confirmMessage" class="confirmMessage"></span>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="email" id="email" name="email" value="" class="form-control" required >
									<label class="form-label">E Mail</label>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" id="tlp" name="tlp" value="" class="form-control" required >
									<label class="form-label">Telepon</label>
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
	var password = document.getElementById('password');
	var konfpass = document.getElementById('konfpass');
	var message = document.getElementById('confirmMessage');
	var alert = document.getElementById('alert');
	var alert2 = document.getElementById('alert2');
	//Set the colors we will be using ...
	var goodColor = "#008000";
	var badColor = "#ff0000";
	$('#msgnm').hide();

	document.getElementById('save').disabled = true;


	$("#save").click(function(){
		if($('#nama').val() == null || $('#nama').val() == "") {
			e.preventDefault();
		}else if($('#password').val() == null || $('#password').val() == "") {
			e.preventDefault();
		}else if($('#konfpass').val() == null || $('#konfpass').val() == "") {
			e.preventDefault();
		}else if($('#email').val() == null || $('#email').val() == "") {
			e.preventDefault();
		}else if($('#tlp').val() == null || $('#tlp').val() == "") {
			e.preventDefault();
		}else{

			$.ajax({

				url : "<?php echo base_url(); ?>dashboard/user/add", 
				type: "POST",             
				data: $("#form").serialize(),
				success: function(data) {
					document.getElementById("form").reset();
				}
			});
		}
		return false; 
	});

	$("#username").on("blur", function(e) {
		$('#msg').hide();
		if ($('#username').val() == null || $('#username').val() == "") {
			$('#msg').show();
			$("#msg").html("Username harus diisi").css("color", "red");
		} else {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>dashboard/user/cari/",
				data: $('#form').serialize(),
				dataType: "HTML",
				cache: false,
				success: function(msg) {
					$('#msg').show();
					$("#msg").html(msg);
					if (alert2.value == 1 && alert.value == 1){
						document.getElementById('save').disabled = false;
					}else{
						document.getElementById('save').disabled = true;
					}

				},
				error: function(jqXHR, textStatus, errorThrown) {
					$('#msg').show();
					$("#msg").html(textStatus + " " + errorThrown);
				}
			});
		}
	});


	function cekPass()
	{
		
		if(password.value == konfpass.value){
			message.style.color = goodColor;
			alert2.value = 1;
			message.innerHTML = "Password Cocok!"
		}else{
			message.style.color = badColor;
			alert2.value = 0;
			message.innerHTML = "Password Tidak Cocok!"
			
		}
		
	}  

	$("#konfpass").on("blur", function(e) {
		if (alert2.value == 1 && alert.value == 1){
			document.getElementById('save').disabled = false;
		}else{
			document.getElementById('save').disabled = true;
		}
	});
	
</script>