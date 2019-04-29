<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="section-headline text-center">
			<h2>Contact us</h2>
		</div>
	</div>
</div>
<div class="row" style="min-height:200px">
	<!-- Start contact icon column -->
	<?php foreach($contacts as $row){?>
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="contact-icon text-center">
			<div class="single-icon">
				<i class="fa fa-mobile"></i>
				<p>
					<?php echo $row->tlp_ktk ?>
				</p>
			</div>
		</div>
	</div>
  <!-- Start contact icon column -->
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="contact-icon text-center">
			<div class="single-icon">
				<i class="fa fa-envelope-o"></i>
				<p>
					<?php echo $row->email_ktk ?>
				</p>
			</div>
		</div>
	</div>
  <!-- Start contact icon column -->
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="contact-icon text-center">
			<div class="single-icon">
				<i class="fa fa-map-marker"></i>
				<p>
					<?php echo $row->alamat ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<div class="row">
          <!-- Start Google Map -->
    <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
	</div>
          <!-- End Google Map -->

          <!-- Start  contact -->
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form contact-form">
            <div id="sendmessage">Pesan Kamu Telah Terkirim. Terima Kasih!</div>
            <div id="errormessage">Gagal Terikirim</div>
            <form action="<?php echo base_url()?>home/kontak" method="post" role="form" class="contactForm" >
				<div class="form-group">
					<input type="text" name="name" class="form-control" id="name" placeholder="Nama Kamu" data-rule="minlen:4" data-msg="Tulis Sekurang-kurangnya 4 Karakter" />
					<div class="validation"></div>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu" data-rule="email" data-msg="Gunakan Email yang Valid" />
					<div class="validation"></div>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Pertanyaan" data-rule="minlen:4" data-msg="Tulis Sekurang-kurangnya 8 Karakter" />
					<div class="validation"></div>
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tulis Keterangan Lebih Lengkap" placeholder="Keterangan Lengkap"></textarea>
					<div class="validation"></div>
				</div>
				<div class="text-center"><button type="submit">Kirim</button></div>
            </form>
        </div>
    </div>
          <!-- End Left contact -->
</div>