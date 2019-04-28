<style>
.gal {
	-webkit-column-count: 5; /* Chrome, Safari, Opera */
    -moz-column-count: 5; /* Firefox */
    column-count: 5;
	}	
	.gal img{ width: 100%; padding: 7px 0;}
@media (max-width: 500px) {
	.gal {
		-webkit-column-count: 1; /* Chrome, Safari, Opera */
		-moz-column-count: 1; /* Firefox */
		column-count: 1;
		}
	}
</style>
<div class="row">
	<div class="well-text text-center">
		<h2>Siapa Saja Klien Kami?</h2>
	</div>
	<div class="gal">
	<?php foreach($clients as $row){?>
		<img src="<?php echo base_url();?>unggah/klien/<?php echo $row->image?>">			
	<?php }?>
	</div>
</div>