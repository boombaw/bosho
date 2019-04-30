 <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="detail">
                                <?php foreach ($detail_notif as $key => $value): ?>
                                <div class="panel panel-default panel-post">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="#"><?php echo $value->email_form ." - ".$value->nama_form ?></a>
                                                </h4>
                                                <?php echo $value->dt_form ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="post">
                                            <div class="post-heading">
                                                <h2><?php echo $value->jdl_form ?></h2>
                                                <br><br>
                                                <p><?php echo $value->desc_form ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>