﻿
<style>
.kontener {
  position: relative;
  width: 100%;
  max-width: 100%;
}
/* Make the image to responsive */
.imagex {
  width: 100%;
  height: auto;
}

/* The overlay effect (full height and width) - lays on top of the container and over the image */
.overle {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: grey;
}

/* When you mouse over the container, fade in the overlay icon*/
.kontener:hover .overle {
  opacity: 0.5;
}

/* The icon inside the overlay is positioned in the middle vertically and horizontally */
.iconx {
  color: white;
  font-size: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  cursor: pointer;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

/* When you move the mouse over the icon, change color */
.material-icons:hover {
  color: #aaa;
}
</style>
<div class="block-header">
	<h2>Pengaturan</h2>
</div>
<!-- Input -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Pengaturan Harga
				</h2>
			</div>
			<div class="body">
				<div class="row clearfix">
					<div class="col-sm-4">
						<div class="form-group">
							<div class="kontener">
							  <img src="<?php echo base_url()?>unggah/price/1/<?php echo $price1?>" class="imagex">
							  <div class="overle">
								<a class="iconx demo-google-material-icon" data-toggle="modal" data-target="#priceModal1" >
								  <i class="material-icons md-48">add_a_photo</i>
								</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<div class="kontener">
							  <img src="<?php echo base_url()?>unggah/price/2/<?php echo $price2?>" class="imagex">
							  <div class="overle">
								<a class="iconx demo-google-material-icon" data-toggle="modal" data-target="#priceModal2" >
								  <i class="material-icons md-48">add_a_photo</i>
								</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<div class="kontener">
							  <img src="<?php echo base_url()?>unggah/price/3/<?php echo $price3?>" class="imagex">
							  <div class="overle">
								<a class="iconx demo-google-material-icon" data-toggle="modal" data-target="#priceModal3" >
								  <i class="material-icons md-48">add_a_photo</i>
								</a>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

			
			
<div class="modal fade" id="priceModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="defaultModalLabel">Harga 1
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
			</div>
			<form class ="form-horizontal" action="<?php echo site_url();?>dashboard/price/imgs" method="post" enctype="multipart/form-data">
				<div class="modal-body">  
					<div class="form-group">
						<input type="file" name="files" class="form-control-file">
						<input type="hidden" name="penentu" value="1" class="form-control-file">
					<small id="fileHelp" class="form-text text-muted">Gunakan File dengan format .jpeg, .gif atau .png</small>
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
<div class="modal fade" id="priceModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="defaultModalLabel">Harga 2
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
			</div>
			<form class ="form-horizontal" action="<?php echo site_url();?>dashboard/price/imgs" method="post" enctype="multipart/form-data">
				<div class="modal-body">  
					<div class="form-group">
						<input type="file" name="files" class="form-control-file">
						<input type="hidden" name="penentu" value="2" class="form-control-file">
					<small id="fileHelp" class="form-text text-muted">Gunakan File dengan format .jpeg, .gif atau .png</small>
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
<div class="modal fade" id="priceModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="defaultModalLabel">Harga 3
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
			</div>
			<form class ="form-horizontal" action="<?php echo site_url();?>dashboard/price/imgs" method="post" enctype="multipart/form-data">
				<div class="modal-body">  
					<div class="form-group">
						<input type="file" name="files" class="form-control-file">
						<input type="hidden" name="penentu" value="3" class="form-control-file">
					<small id="fileHelp" class="form-text text-muted">Gunakan File dengan format .jpeg, .gif atau .png</small>
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
