<div class="span9">
	<ul class="breadcrumb">
		<li class="divider"><a href="<?php echo base_url(); ?>">Home    /</a></li>

		<li class="active">
		</li>
	</ul>
		<?php
		foreach($data_get->result_array() as $dp)
		{
		?>
		<div class="caption">
		
		  <h5 class="content-green-hover no-margin text-bold"><?php echo $dp['judul_berita']; ?></h5>
		<?php
			
			echo word_limiter(($dp['isi']), 75);
			
		?>
		</div>
		<p>
			<a class="btn" href="#">view details</a>
		</p>
		
<?php } ?>
		<div class="pagination pagination-centered">
		<ul>
		<?php
			echo $paginator;
		?>
		</ul>
		</div>
</div>
	</div>
	
	<!-- tutup isi
================================================== -->
