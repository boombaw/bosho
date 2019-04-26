
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Ada Pertanyaan?</h2>
          </div>
        </div>
      </div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="faq-details">
					<div class="panel-group" id="accordion">
					  <!-- Panel Default -->
					  <?php $i=1; foreach($faqs as $row){?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="check-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#check<?php echo $i ?>">
										<span class="acc-icons"></span><?php echo $row->question?>
									</a>
								</h4>
							</div>
							<div id="check<?php echo $i ?>" class="panel-collapse collapse">
								<div class="panel-body">
									<p>
									  <?php echo $row->answer?>
									</p>
								</div>
							</div>
						</div>
					 <?php $i++;}?>
					  <!-- End Panel Default -->
					</div>
				 </div>
			</div>
		</div>
      <!-- end Row -->