<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<html>
	<head>
	<title>Multi-Level Dropdown</title>
	<link href="<?php echo base_url();?>asset/multilevel/css/pagestyle.css" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo base_url();?>asset/multilevel/css/style.css" rel="stylesheet" type="text/css" media="screen, projection"/>
	<!--[if lte IE 7]>
        <link type="text/css" href="<?php echo base_url();?>asset/multilevel/css/ie.css" rel="stylesheet"  media="screen" />
	<![endif]-->
			
	<script type="text/javascript" src="<?php echo base_url();?>asset/multilevel/js/jquery.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>asset/multilevel/js/jquery.dropdownPlain.js"></script>
	</head>
<body>
	<div id="header"><h2>Multi-Level Dropdown</h2></div>
	<div id="content">
		
		<ul class="dropdown">
		<?php
		foreach($multilevel as $data)
		{
			echo '<li><a href="#">'.$data['title'].'</a>';
			echo '<ul class="sub_menu">';
			echo print_recursive_list($data['child']);
			echo '</ul>';
		}
		?>
		</ul>
	</div>
	<div id="footer">Copyright &copy; anggytrisnawan.com</div>
</body>
</html>