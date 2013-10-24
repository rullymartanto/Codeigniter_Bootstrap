
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
	    <a class="brand" href="#">Daftar Menu Statis </a></div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
  
	  <section>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th></th>
        <th>No.</th>
        <th>ID</th>
		<th>Title</th>
		<th>ID_Parent</th>
		<th>Level</th>
		<th>Aksi</th>
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
		<input type="checkbox" name="chk[]" id="chk-<?php echo $no2; ?>" class="chk" value="<?php echo $dp['id']; ?>" />
		</td>
		<td><?php echo $no; ?></td>
		<td><?php echo $dp['id']; ?></td>
        <td><?php echo $dp['title']; ?></td>
		<td><?php echo $dp['id_parent']; ?></td>
		<td><?php echo $dp['level']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small small-box" href="<?php echo base_url(); ?>app_admin_statis/edit/<?php echo $dp['id']; ?>"><i class="icon-pencil"></i> Edit Data</a>
	            
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

		</ul>
	</div>
	
  

</section>
  </div>


