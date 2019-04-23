
<div class="block-header">
	<h2>Pengaturan</h2>
</div>
<!-- Input -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Pengaturan
					<small>Pengguna</small>
				</h2>
				<ul class="header-dropdown m-r--1">
					<li>
					<a class="btn bg-light-blue waves-effect waves-black btn-lg"  data-toggle="tooltip" data-placement="left" data-original-title="Tambah Pengguna" href="<?php echo base_url('dashboard/user/tambah/') ?>"><i class="material-icons">person_add</i><span>Tambah User</span></a>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>Username</th>
								<th>E-Mail</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php $i=1; foreach($user as $row){?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $row->nama ?></td>
								<td><?php echo $row->username ?></td>
								<td><?php echo $row->email ?></td>
								<td align="center">
									<a href="<?php echo site_url('dashboard/user/edit/'.$row->id_pengguna) ?>" type="button" class="btn btn-info waves-effect">
                                    	<i class="material-icons">mode_edit</i>
                                	</a>&nbsp;&nbsp;<button type="button" class="btn btn-danger waves-effect del-user" data-type="confirm" name="<?php echo $row->id_pengguna; ?>" >
                                    	<i class="material-icons">delete</i>
                                	</button>
                            	</td>
							</tr>
						<?php $i++;}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	
	// var du = document.getElementsByClassName("del-user");

	 $(document).on('click','.del-user',function (e) {
        e.preventDefault();
        var id = $(this).attr('name')

        var r = confirm("Hapus pengguna ini ?");
        
        if (r) {
	       	$.ajax({

	            url: "<?php echo base_url(); ?>dashboard/user/delete",
	            type: "POST",
	            data: {asd:id},
	            success: function(data) {
	            	var res = JSON.parse(data);
	                alert(res.text);
	            	if (res.results == 'success') {
	            		location.reload(true);
	            	}
	            }
	        });
        }else{
        	alert('not ok');
        }
     })
</script>

