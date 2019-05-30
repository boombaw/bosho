<!DOCTYPE html>
<html>

<head>
	<?php $web=$this->session->userdata('company'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="robots" content="none" />
	<meta name="googlebot" content="none" />
    <title><?php echo $web['nama_company'] ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>unggah/logo/<?php echo $web['logo'] ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Sweetalert Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
	
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/node-waves/waves.css" rel="stylesheet" />
	
    <!-- Bootstrap Tagsinput Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
	
    <!-- Light Gallery Plugin Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	
    <!-- Dropzone Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/plugins/dropzone/dropzone.css" rel="stylesheet">
	
    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/css/style.css" rel="stylesheet">
	
    <!-- adminbsb Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/adminbsb/css/themes/all-themes.css" rel="stylesheet" />
	<script>
      var base_url = '<?php echo base_url(); ?>';  
    </script>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery/jquery.min.js"></script>
</head>

<body class="theme-red" id="body">

    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url();?>dashboard"><?php echo $web['nama_company'] ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                     <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count"><?php echo $this->session->userdata('notif_unread') > 0 ? $this->session->userdata('notif_unread') : ''; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <?php $notif = $this->session->userdata('notif');?>
                                    <?php foreach ($notif as $key => $value): ?>
                                        <?php if ($value->read == 0): ?>
                                            <li>
                                                <a href="<?php echo site_url('dashboard/notif/detail/'.$value->id_form) ?>" class="notif-detail" data-attr="<?php echo $value->id_form ?>" >
                                                    <div class="icon-circle bg-blue-grey">
                                                        <i class="material-icons">comment</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b><?php echo $value->jdl_form ?></b> commented your web</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 4 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php else: ?>
                                             <li>
                                                <a href="<?php echo site_url('dashboard/notif/detail/'.$value->id_form) ?>" class="notif-detail" data-attr="<?php echo $value->id_form ?>">
                                                    <div class="icon-circle bg-cyan">
                                                        <i class="material-icons">comment</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b><?php echo $value->jdl_form ?></b> commented your web</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 4 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="<?php echo site_url('dashboard/notif') ?>">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url(); ?>unggah/logo/<?php echo $web['logo']?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo site_url('logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php if($this->uri->segment(2)==""){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="signature"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/signature">
                            <i class="material-icons">settings</i>
                            <span>Pengaturan Umum</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="user"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/user">
                            <i class="material-icons">person</i>
                            <span>Pengaturan Pengguna</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="kontak"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/kontak">
                            <i class="material-icons">contacts</i>
                            <span>Pengaturan Kontak</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="klien"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/klien">
                            <i class="material-icons">group</i>
                            <span>Pengaturan Klien</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="faq"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/faq">
                            <i class="material-icons">question_answer</i>
                            <span>Pengaturan FAQ</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="price"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/price">
                            <i class="material-icons">monetization_on</i>
                            <span>Pengaturan Harga</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="about"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/about">
                            <i class="material-icons">store</i>
                            <span>Pengaturan Tentang</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="artikel"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/artikel">
                            <i class="material-icons">book</i>
                            <span>Pengaturan Artikel</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="portofolio"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/portofolio">
                            <i class="material-icons">book</i>
                            <span>Pengaturan Portofolio</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=="slider"){echo "active";}?>">
                        <a href="<?php echo base_url()?>dashboard/slider">
                            <i class="material-icons">collections</i>
                            <span>Pengaturan Slider</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">adminbsb - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
			<?php echo $this->load->view($page) ?>
        </div>
    </section>


    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap/js/bootstrap.js"></script>
    
    <!-- CKEditor -->
    <script src="<?php echo base_url();?>assets/adminbsb/plugins/ckeditor/ckeditor.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/dropzone/dropzone.js"></script>
    <!-- A -->
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        if ($('#add_pdropzone').length) {
            
            
            /*Add Portofolio*/
            var foto_upload = new Dropzone("#add_pdropzone",{
                url: "<?php echo base_url('dashboard/portofolio/add') ?>",
                maxFilesize: 2,
                parallelUploads: 10,
                uploadMultiple: true,
                autoProcessQueue: false, 
                method:"post",
                paramName:"userfile",
                dictInvalidFileType:"Type file ini tidak dizinkan",
                addRemoveLinks:true,
                init:   function () {

                            var myDropzone = this;

                            // Update selector to match your button
                            $("#saveport").click(function (e) {
                                e.preventDefault();
                                
                                if(myDropzone.files.length){
                                    myDropzone.processQueue();
                                } else {     
                                    error = 'Lampirkan Bukti galeri portofolio'; 
                                    alert(error)
                                }                            

                                if($("#tag").length < 0){
                                    error = 'Tag tidak boleh kosong'; 
                                    alert(error)
                                }
                            });

                            this.on('sending', function(file, xhr, formData) {
                                // Append all form inputs to the formData Dropzone will POST
                                var editor = CKEDITOR.instances['editor1'].getData();
                                var data = $('#frmPort').serializeArray();
                                formData.append("thumbport",document.getElementById("thumb").files[0]);
                                formData.append("title",$("#judul").val());
                                formData.append("tag",$("#tag").val());
                                formData.append("e1",editor);
                            });

                            this.on('success',function (res,xhr) {
                                console.log(res);
                                // alert(xhr);
                                var uri = "<?php echo base_url('dashboard/portofolio') ?>";
                                // location.replace(uri);
                                
                            });
                        
                        }
                });
        
        }
        
        if ($('#edit_pdropzone').length) {
            
            var foto_upload = new Dropzone("div#edit_pdropzone",{
            url: "<?php echo base_url('dashboard/portofolio/update') ?>",
            maxFilesize: 2,
            parallelUploads: 10,
            uploadMultiple: true,
            autoProcessQueue: false, 
            method:"post",
            paramName:"userfile",
            dictInvalidFileType:"Type file ini tidak dizinkan",
            addRemoveLinks:true,
            init:   function () {

                        var myDropzone = this;

                        // Update selector to match your button
                        $("#editport").click(function (e) {
                            e.preventDefault();
                            
                            if(myDropzone.files.length){
                                myDropzone.processQueue();
                            } else {                      
                                error = 'Lampirkan Bukti galeri portofolio'; 
                                alert(error)
                            }                            
                        });

                        this.on('sending', function(file, xhr, formData) {
                            // Append all form inputs to the formData Dropzone will POST
                            var editor = CKEDITOR.instances['editor2'].getData();
                            var data = $('#formeport').serializeArray();
                            var id = $('#formeport').attr('eid');
                            formData.append("thumbport",document.getElementById("thumb").files[0]);
                            formData.append("title",$("#judul").val());
                            formData.append("e1",editor);
                            formData.append("asd",id);
                        });

                        this.on('success',function (res,xhr) {
                            // alert(xhr);
                            var uri = "<?php echo base_url('dashboard/portofolio') ?>";
                            location.replace(uri);
                            
                        });
                    
                    }
            });
        // other code here
        }
        </script>
	
    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/sweetalert/sweetalert.min.js"></script>
	
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	
    <!-- Light Gallery Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/plugins/light-gallery/js/lightgallery-all.js"></script>
	
    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/pages/index.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminbsb/js/pages/forms/basic-form-elements.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/pages/tables/jquery-datatable.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/pages/ui/dialogs.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/pages/ui/tooltips-popovers.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/pages/medias/image-gallery.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/adminbsb/js/demo.js"></script>
</body>

</html>
