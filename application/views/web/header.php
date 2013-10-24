<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Web Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- 
	<link rel="stylesheet" href="themes/style/bootstrap.min.css" />
	<link rel="stylesheet" href="themes/style/bootstrap-responsive.min.css" />
	-->
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>asset/themes/less/bootstrap.less">
	<script src="<?php echo base_url(); ?>asset/themes/js/less/less.js" type="text/javascript"></script>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/ico/favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/lightbox.css" media="screen"/>
  </head>
<body data-offset="40">
<header class="header">
<div class="container">
<div class="row">
	<h1 class="span6"><a href="# title="bootstrap free business website template"><img src="<?php echo base_url(); ?>asset/themes/images/bootstrap_logo.png" alt="bootstrap free business website template"/></a></h1>
	<div class="span6"><div class="pull-right"><br/> <a class="pull-right" href="mailto: rullymartanto@gmail.com"><small><i class="icon-envelope"></i>  E: rullymartanto@gmail.com</small></a><strong>
	<small> <br/><i class="icon-phone"></i> Call 0853 1043 5984</small></strong></div></div>
</div>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
		<?php
		foreach($web as $data)
		{
			echo '<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">'.$data['title'].'   <b class="caret"></b></a>';
				echo '<ul class="dropdown-menu"><li>';
					echo print_recursive_list($data['child']);
				echo '</li></ul>';
			echo '</li>';

		}
		?>			
		</li>
		</ul>
		
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
<!-- ======================================================================================================================== -->

<div class="container">
<div class="row">
	<div class="span3">
		<ul class="nav nav-tabs nav-stacked">
		<?php
		foreach($menuleft->result_array() as $dp)
		{
			echo "<li><a href='".base_url()."index.php/web/data/".$dp['id']."'><i class='icon-chevron-right'></i>".$dp['title']."</a>";
			echo '</li>';

		}
		?>	
		</ul>
	</div>

	<!-- isi
================================================== -->
