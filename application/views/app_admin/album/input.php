  <body>
  <div class="container">
	<div class="well">
	<?php if(validation_errors()) { ?>
		<div class="alert alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
			</div>
	<?php } ?>
		<?php echo form_open_multipart('app_admin_album/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>album</legend>
			<label class="control-label" for="nama_hukuman">Judul album</label>
			<div class="controls">
			  <input type="text" class="span"  name="nama_album" id="nama_album" value="<?php echo $nama_album; ?>" style="width:350px; placeholder="Judul album" required>
			</div>
		  </div>
				<div class="control-group">
				<label class="control-label" for="nama_hukuman">Isi album </label>
				
				<div class="control-group">
					<div class="controls">
					<button type="submit" class="btn btn-primary">Simpan Data</button>
					<button type="reset" class="btn" onClick="self.location= '<?php echo base_url();?>app_admin_album'">Batal</button>
					<input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
					<input type="hidden" name="st" value="<?php echo $st; ?>">
					</div>
				</div>
			</div>
		</div>
		
		<?php echo form_close(); ?>
	</div>    
</div>
  </body>
