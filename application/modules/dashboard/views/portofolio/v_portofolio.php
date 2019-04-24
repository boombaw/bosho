<script type="text/javascript">
    function attach(id) {
        $("#detil").load('<?php echo base_url()?>dashboard/portofolio/lihat/'+id);
    }
</script>  
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
					<small>Portofolio</small>
				</h2>
				<ul class="header-dropdown m-r--1">
					<li>
					<a class="btn bg-light-blue waves-effect waves-black btn-lg"  data-toggle="tooltip" data-placement="left" data-original-title="Tambah Portofolio" href="<?php echo base_url('dashboard/portofolio/tambah/') ?>"><i class="material-icons">book</i><span>Tambah Portofolio</span></a>
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
								<th>Isi</th>
								<th>Waktu</th>
								<th>Thumbnail</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php $i=1; foreach($portofolio as $row){?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $row->judul ?> <a onclick="attach(<?php echo $row->id_portofolio ?>)" data-toggle="modal" href="#detail">
										<i class="material-icons" data-toggle="tooltip" title="Lihat <?php echo $row->judul ?>">visibility</i>
									</a></td>
								<td><?php echo substr($row->isi,0,10) ?></td>
								<td><?php echo datetimeIdn($row->dt_portofolio) ?></td>
								<td><img src="<?php echo base_url('unggah/portofolio/'.$row->thumbnail)?>" style="height:40px;"></td>
								<td align="center">
									<a href="<?php echo site_url('dashboard/portofolio/edit/'.$row->id_portofolio) ?>" type="button" class="btn btn-info waves-effect">
                                    	<i class="material-icons">mode_edit</i>
                                	</a>&nbsp;&nbsp;<button type="button" class="btn btn-danger waves-effect del-portofolio" data-type="confirm" name="<?php echo $row->id_portofolio; ?>" >
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


<!-- edit modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="detil">
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
	
	$(document).on('click','.del-portofolio', function (e) {
		e.preventDefault();
        var id = $(this).attr('name')

        var r = confirm("Hapus portofolio ini ?");
        
        if (r) {
	       	$.ajax({

	            url: "<?php echo base_url(); ?>dashboard/portofolio/delete",
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