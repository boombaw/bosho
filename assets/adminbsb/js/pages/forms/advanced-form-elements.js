
	Dropzone.autoDiscover = false;
	if ($('#frmFileUpload').length) {
		
		//Dropzone
		var foto_upload = new Dropzone("form#frmFileUpload",{
			url: base_url+"dashboard/klien/proses_upload",
			paramName: "userfile",
			method:"post",
			acceptedFiles:"image/*",
			dictInvalidFileType:"Type file ini tidak dizinkan",
			addRemoveLinks:true,
			maxFilesize: 2
		});
		//Event ketika Memulai mengupload
		foto_upload.on("sending",function(a,b,c){
			a.token=Math.random();
			c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
		});


		//Event ketika foto dihapus
		foto_upload.on("removedfile",function(a){
			var token=a.token;
			$.ajax({
				type:"post",
				data:{token:token},
				url: base_url+"dashboard/klien/remove_foto",
				cache:false,
				dataType: 'json',
				success: function(){
					console.log("Foto terhapus");
				},
				error: function(){
					console.log("Error");

				}
			});
		});
	}

	// Hapus Foto
	$(document).on('click','.rem-image',function (e) {
		e.preventDefault();
		// Get token 
		var token = $(this).attr('data-attr');
		// Confirm to delete
		var r = confirm('Ingin menghapus klien ini ?');
		// Cek result confirm
		if (r) {
			$.ajax({
				type:"post",
				data:{token:token},
				url: base_url+"/dashboard/klien/remove_foto",
				cache:false,
				dataType: 'json',
				success: function(){
					alert("Foto terhapus");
					$.ajax({
						type: "POST",
						url: base+"dashboard/klien/index1", //script php untuk mengecek pesan, didalamnya berupa query select
						cache: false,
						dataType: "HTML",
						success: function(msg){ 
							$("#aniimated-thumbnials").html(msg);
						}
					});
				},
				error: function(){
					alert("Error");

				}
			});
		}
	})

	// Update Notif Read Status
	$('.notif-detail').click(function (e) {
		
		var id = $(this).attr('data-attr');
		$.ajax({
			url: base_url + "dashboard/notif/update",
            type: "POST",
            data: {id:id},
        });
	})
	
