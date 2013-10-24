
	<script src="<?php echo base_url(); ?>js/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>js/kcfinder/ckfinder.js"></script>

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
		<?php echo form_open_multipart('app_admin_berita/update','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Berita</legend>
			<label class="control-label" for="nama_hukuman">Judul Berita</label>
			<div class="controls">
			  <input  name="judul" type="text" class="span" id="judul" value="<?php echo $judul; ?>" style="width:350px; placeholder="Judul Berita" required>
			</div>
		  </div>
			
			<div class="controls">
				<textarea style="width:350px; height:200px;" name="isi" id="editor">
				<?php 
					echo $isi;
				?>
		</textarea>
		<script type="text/javascript">
            //<![CDATA[
 
                CKEDITOR.replace( 'editor',
                {
                    skin : 'office2003',
                    toolbar : 'MyToolbar',
                    width:"100%",
					
					filebrowserBrowseUrl : '<?php echo base_url();?>js/ckfinder/ckfinder.html',
					filebrowserImageBrowseUrl : '<?php echo base_url();?>js/ckfinder/ckfinder.html?type=Images',
					filebrowserFlashBrowseUrl : '<?php echo base_url();?>js/ckfinder/ckfinder.html?type=Flash',

                });
 
            //]]>
            </script>
			</div>

		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn" onClick="self.location= '<?php echo base_url();?>app_admin_berita'">Batal</button>
			  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
			  <input type="hidden" name="st" value="<?php echo $st; ?>">
			</div>
		  </div>
		<?php echo form_close(); ?>
		</div>
	</div>    
	
  </body>
</html>
