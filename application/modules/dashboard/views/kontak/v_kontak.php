
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
					<small>Kontak</small>
				</h2>
				<ul class="header-dropdown m-r--1">
					<li>
					<a class="btn bg-light-blue waves-effect waves-black btn-lg"  data-toggle="tooltip" data-placement="left" data-original-title="Tambah Kontak" href="<?php echo base_url('dashboard/kontak/tambah/') ?>"><i class="material-icons">contacts</i><span>Tambah kontak</span></a>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						<thead>
							<tr>
								<th>No.</th>
								<th>Judul</th>
								<th>Alamat</th>
								<th>E-Mail</th>
								<th>Telepon</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php $i=1; foreach($kontak as $row){?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $row->jdl_alamat ?></td>
								<td><?php echo $row->alamat ?></td>
								<td><?php echo $row->email_ktk ?></td>
								<td><?php echo $row->tlp_ktk ?></td>
								<td align="center">
									<a href="<?php echo site_url('dashboard/kontak/edit/'.$row->id_kontak) ?>" type="button" class="btn btn-info waves-effect">
                                    	<i class="material-icons">mode_edit</i>
                                	</a>&nbsp;&nbsp;<button type="button" class="btn btn-danger waves-effect del-kontak" data-type="confirm" name="<?php echo $row->id_kontak; ?>" >
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
	
	$(document).on('click','.del-kontak', function (e) {
		e.preventDefault();
        var id = $(this).attr('name')

        var r = confirm("Hapus kontak ini ?");
        
        if (r) {
	       	$.ajax({

	            url: "<?php echo base_url(); ?>dashboard/kontak/delete",
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
        }
	});
</script>

