
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
                                <small>FAQ</small>
                            </h2>
                            <ul class="header-dropdown m-r--1">
								<li data-toggle="tooltip" data-placement="left" data-original-title="Tambah FAQ" >
								<a class="btn bg-light-blue waves-effect waves-black btn-lg"  data-toggle="modal" data-target="#faqModal"><i class="material-icons">question_answer</i><span>Tambah FAQ</span></a>
								</li>
							</ul>
                        </div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
										<tr>
											<th>No.</th>
											<th>Pertanyaan</th>
											<th>Jawaban</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
									<?php $i=1; foreach($faq as $row){?>
										<tr>
											<td><?php echo $i ?></td>
											<td><?php echo $row->question ?></td>
											<td><?php echo $row->answer ?></td>
											<td align="center">
												<a href="#" type="button" name="<?php echo $row->id_faq ?>" class="btn btn-info waves-effect" id="e-btn">
			                                    	<i class="material-icons">mode_edit</i>
			                                	</a>&nbsp;&nbsp;<button type="button" class="btn btn-danger waves-effect del-faq" data-type="confirm" name="<?php echo $row->id_faq; ?>" >
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
			
	
			
<div class="modal fade" id="faqModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="defaultModalLabel">Frequently Asked Questions
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
			</div>
			<form class ="form-horizontal" action="<?php echo site_url();?>dashboard/faq/simpan" method="post" enctype="multipart/form-data">
				<div class="modal-body"> 
					<div class="form-group">
						<div class="form-line">
							<textarea rows="1" class="form-control no-resize auto-growth" name="pertanyaan" placeholder="Pertanyaan" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="form-line">
							<textarea rows="1" class="form-control no-resize auto-growth" name="jawaban" placeholder="Jawaban" required></textarea>
						</div>
					</div>
				</div> 
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
					<input type="submit" class="btn btn-primary" value="Simpan" id="save"/>
				</div>
			</form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> 			
	
<!-- Edit -->			
<div class="modal fade" id="e-faqModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="eLabel">Frequently Asked Questions
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
			</div>
			<form class ="form-horizontal" action="<?php echo site_url();?>dashboard/faq/update" method="post" enctype="multipart/form-data">
				<input type="hidden" id="easd" value="">
				<div class="modal-body"> 
					<div class="form-group">
						<div class="form-line">
							<textarea rows="1" class="form-control no-resize auto-growth" name="e-pertanyaan" id="e-pertanyaan" placeholder="Pertanyaan" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="form-line">
							<textarea rows="1" class="form-control no-resize auto-growth" name="e-jawaban" id="e-jawaban" placeholder="Jawaban" required></textarea>
						</div>
					</div>
				</div> 
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
					<input type="submit" class="btn btn-primary" value="Simpan" id="e-save"/>
				</div>
			</form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> 	

<script>
	$(document).on('click','#e-btn', function (e) {
		e.preventDefault();
		var id = $(this).attr('name');
		$.ajax({

            url: "<?php echo base_url(); ?>dashboard/faq/edit",
            type: "POST",
            data: {asd:id},
            success: function(data) {
            	var res = JSON.parse(data);
            	$("#easd").val(id);
            	$("#e-pertanyaan").text(res.question);
            	$("#e-jawaban").text(res.answer);
				$("#e-faqModal").modal('show');
            }
        });
	});

	/*Delete*/
	$(document).on('click','.del-faq', function (e) {
		e.preventDefault();
        var id = $(this).attr('name')

        var r = confirm("Hapus FAQ ini ?");
        
        if (r) {
	       	$.ajax({

	            url: "<?php echo base_url(); ?>dashboard/faq/delete",
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