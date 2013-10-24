
    <div class="container">
	
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3><?php echo $this->config->item("nama_instansi"); ?></h3>
		</div>
	  </div>
	</div>

  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Index Berita</a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="<?php echo base_url(); ?>app_admin_berita/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Berita</a></li>
			</ul>
		  </div>
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
  
	  <section>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th width="20"></th>
        <th width="24">No.</th>
        <th width="82">Judul Berita</th>
		<th width="64">Tanggal</th>
		<th width="80">Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=$tot+1;
		$no2=1;
		foreach($data_get->result_array() as $dp)
		{
	?>
      <tr>
        <td>
		<input type="checkbox" name="chk[]" id="chk-<?php echo $no2; ?>" class="chk" value="<?php echo $dp['id_berita']; ?>" />
		</td>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['judul_berita']; ?></td>
		<td><?php echo $dp['tanggal']; ?></td>
		<td>
	         <div class="btn-group">
			          <a class="btn small-box" href="<?php echo base_url(); ?>app_admin_berita/edit/<?php echo $dp['id_berita']; ?>"><i class="icon-ok-circle"></i> Detail</a>
			          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="<?php echo base_url(); ?>app_admin_berita/edit/<?php echo $dp['id_berita']; ?>" class="small-box"><i class="icon-pencil"></i> Edit Data</a></li>
			            <li><a href="<?php echo base_url(); ?>app_admin_berita/hapus/<?php echo $dp['id_berita']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
			          </ul>
			        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
			$no2++;
	 	}
	 ?>
    </tbody>
    <tr><td colspan="7" align="right">&nbsp;</td>
    </tr>
  </table>
	<div class="pagination pagination-centered">
		<ul>
		<?php
			echo $paginator;
		?>
		</ul>
	</div>
  

</section>
  </div>


