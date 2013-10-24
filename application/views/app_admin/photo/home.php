<body>
  <div class="container">
<div class="well">
		<div class="navbar navbar-inverse">
		<div class="navbar-inner">
		<div class="container">
		<a class="brand" href="#">Index Photo</a>
		</div>
	  	</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
  
		<?php echo form_open_multipart('app_admin_album/simpan','class="form-horizontal"'); ?>
			<div class="control-group">
			<label class="control-label" for="nama_hukuman">Photo</label>
			<div class="controls">
			<select name="album" class="input">
				<?php
				foreach($album->result_array() as $a)
				{
				echo "<option value='".$a['id_album']."'>".$a['nama_album']."</option>";
				}
				?>
			  </select>
			</div>
			</div>
			
				<label class="control-label" for="nama_hukuman">Cari File</label>
				<div class="controls">
				<div class="input-append">
					<!-- <input type="file" name="file"/>-->
				<input type="file" class="input" name="userfile" size="50" maxlength="100"/>

				</div>
				</div>
			
				<div class="control-group">
				<div class="controls">
				<button type="submit" class="btn btn-primary">Simpan Data</button>
				<button type="reset" class="btn" onClick="self.location= '<?php echo base_url();?>app_admin_photo/'">Batal</button>
				</div>
				</div>
    	  <section>
 <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th width="20"></th>
        <th width="98">Nama Album</th>
		<th width="100">Nama Photo</th>
		<th width="85">Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		foreach($data_get->result_array() as $dp)
		{
	?>
      <tr>
        <td><input type="checkbox" name="item[]" id="item[]" value="<?=$id_album?>" /></td>
		<td><?php echo $dp['nama_album']; ?></td>
		<td ><img src="<?php echo base_url(); ?>application/views/galeri/thumb/<?php echo $dp['foto_besar']; ?>" alt="<?php echo $dp['foto_besar']; ?>" width="50" /></td>
		<td>
	         <div class="btn-group">
			          <a class="btn small-box" href="<?php echo base_url(); ?>app_admin_photo/<?php echo $dp['id_album']; ?>"><i class="icon-ok-circle"></i> Detail</a>
			          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="<?php echo base_url(); ?>app_admin_photo/edit/<?php echo $dp['id_album']; ?>" class="small-box"><i class="icon-pencil"></i> Edit Data</a></li>
			            <li><a href="<?php echo base_url(); ?>app_admin_photo/hapus/<?php echo $dp['id_album']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
			          </ul>
	        </div><!-- /btn-group -->		</td>
      </tr>
	 <?php
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


