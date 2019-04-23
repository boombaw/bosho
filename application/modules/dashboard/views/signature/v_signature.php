
<style>
  .kontener {
    position: relative;
    width: 100%;
    max-width: 150px;
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
          Pengaturan
          <small>Umum</small>
        </h2>
      </div>
      <div class="body">
       <form class ="form-horizontal" action="<?php echo site_url();?>dashboard/signature/edit" method="post" enctype="multipart/form-data">
        <div class="row clearfix">
         <div class="col-sm-2">
          <div class="form-group">
           <div class="kontener">
             <img src="<?php echo base_url()."unggah/logo/".$company['logo'] ?>" class="imagex">
             <div class="overle">
              <a class="iconx demo-google-material-icon" data-toggle="modal" data-target="#uploadModal" >
                <i class="material-icons md-48">add_a_photo</i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-10">
        <div class="form-group form-float form-group-lg">
         <div class="form-line">
          <input type="text" name="nama_company" value="<?php echo $company['nama_company']?>" class="form-control" required autofocus>
          <label class="form-label" >Nama Website</label>
        </div>
      </div>
      <br>
      <div class="form-group form-float form-group-lg">
       <div class="form-line">
        <input type="text" name="singkatan" value="<?php echo $company['singkatan']?>" class="form-control" required>
        <label class="form-label">Nama Singkatan Website</label>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
  </div>
  <div class="col-sm-9">
    <button type="submit" class="btn bg-deep-orange waves-effect waves-black btn-lg">Simpan</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>



<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="defaultModalLabel">Upload
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
      </div>
      <form class ="form-horizontal" action="<?php echo site_url();?>dashboard/signature/imgs" method="post" enctype="multipart/form-data">
        <div class="modal-body">  
         <div class="form-group">
          <input type="file" name="files" class="form-control-file">
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
