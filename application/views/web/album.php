	<div class="span9">
		<ul class="breadcrumb">
		<li class="divider"><a href="<?php echo base_url(); ?>">Home    /
		</a></li>
		<li class="active">
		</li>
	</ul>
	<?php

foreach($data_get->result_array() as $b)
{
echo "<a href='".base_url()."index.php/web/galeri/".$b['id_album']."'><div id='album-besar'><div id='sub-album'><img src='".base_url()."application/views/web/images/album.png' border='0' class='img-polaroid'></div><div id='sub-album'>".$b['nama_album']."</div></div></a>";
}
?>

<?php
echo "<table align='center'><tr><td>".$paginator."</td></tr></table>";
?>
	</div>
	</div>
	</div>
