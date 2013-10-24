<div class="span9">
	<?php
foreach($data_get->result_array() as $j)
{
$judul = $j['nama_album'];
}
?>
	<ul class="breadcrumb">
		<li class="divider"><a href="<?php echo base_url(); ?>">Home    /</a></li>

		<li class="active">
		</li>
	</ul>
<div id="title"><?php echo $judul; ?></div>

		<div class="image-row">
			<div class="image-set">		
<?php
	echo"<br>";
foreach($data_get->result_array() as $b)
{
echo "<a  href='".base_url()."application/views/web/galeri/".$b['foto_besar']."' data-lightbox='example-set' title='Click on the right side of the image to move forward.' ";
?>

<?php
echo"><img src='".base_url()."application/views/web/galeri/thumb/".$b['foto_kecil']."' class='img-polaroid' width='150' height='150'></a>";
}
?>
</div>

<?php
echo "<table align='center'><tr><td>".$paginator."</td></tr></table>";
?>
		</div>
		</div>
		
		
	</div>
	</div>
	</div>
	<!-- tutup isi
================================================== -->
