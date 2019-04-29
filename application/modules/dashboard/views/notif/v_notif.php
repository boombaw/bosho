<!-- Input -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Notifikasi
				</h2>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						<thead>
							<tr>
								<th>No.</th>
								<th>Form</th>
								<th>Judul</th>
								<th>Deskripsi</th>
								<th>E-Mail</th>
								<th>Waktu</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php $i=1; foreach($all_notif as $row){?>
							<tr>
								<td><?php echo $i ?></td>
								<td>
									<a href="<?php echo site_url('dashboard/notif/detail/'.$row->id_form) ?>">
										<?php echo $row->nama_form ?>
									</a>
								</td>
								<td><?php echo $row->jdl_form ?></td>
								<td><?php echo $row->desc_form ?></td>
								<td><?php echo $row->email_form ?></td>
								<td><?php echo $row->dt_form ?></td>
								<td align="center">
									<?php if ($row->read == 0): ?>
										<label for="" class="label label-info">Terbaca</label>
									<?php else: ?>
										<label for="" class="label label-danger">Belum Terbaca</label>
									<?php endif ?>
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

