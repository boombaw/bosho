
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Berapa Harganya?</h2>
          </div>
        </div>
      </div>
      <div class="row">
		  <?php $i=1; foreach($prices as $row){ ?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img style="width:100%" src="<?php echo base_url();?>unggah/price/<?php echo $i?>/<?php echo $row->image?>" alt="<?php echo $row->image?>">
			</div>
		  <?php $i++; } ?>
      </div>