
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->config->item("nama_instansi"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/chosen.css" rel="stylesheet">
	
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/js/jquery-ui-1.10.1.custom.min.js'></script>
  
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/js/globalize.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/js/other/excanvas.js'></script>
	
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap-tooltip.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/colorbox/colorbox.css" />
	<script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/chosen.jquery.js"></script>
	<script>
		  $(document).ready(function(){
			  $(".medium-box").colorbox({rel:'group', iframe:true, width:"90%", height:"90%"});
			  $(".small-box").colorbox({rel:'group', iframe:true, width:"700px", height:"90%"});
		  });
	</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url(); ?>"><?php echo $this->config->item("nama_header"); ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Home </a></li>
			  <li><a href="<?php echo base_url(); ?>app_admin_statis"><i class="icon-book icon-white"></i> Menu Statis</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-folder-open icon-white"></i> Menu Dinamis <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>app_admin_berita" class="medium-box"><i class="icon-circle-arrow-up"></i>Berita</a></li>
                  <li><a href="<?php echo base_url(); ?>app_admin_data_pemilih"><i class="icon-tasks"></i>Artikel</a></li>
                  <li><a href="<?php echo base_url(); ?>app_admin_data_pemilih/tambah" class="small-box"><i class="icon-plus-sign"></i>Pengumuman</a></li>
                </ul>
              </li>
			  <li><a href="<?php echo base_url(); ?>app_admin_album"><i class="icon-book icon-white"></i> Album </a></li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?php echo $this->session->userdata('name'); ?></button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url(); ?>app_admin/change_password"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?php echo base_url(); ?>app_admin_manage_user"><i class="icon-tasks"></i> Manajemen User</a></li>
				<li><a href="<?php echo base_url(); ?>app_admin/logout"><i class="icon-off"></i> Log Out</a></li>
			  </ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>