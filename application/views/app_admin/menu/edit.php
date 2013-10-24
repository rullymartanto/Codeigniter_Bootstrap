
	
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
		<?php echo form_open_multipart('app_admin_statis/update','class="form-horizontal"'); ?>
		<div class="control-group">
		<legend>Menu Statis</legend>
		
		<div class="control-group">
		<label class="control-label" for="nama_hukuman">CATEGORY</label>
		<div class="controls">

	<select name="data_id" class="input" style="width:350px;">

	<?php
	foreach($data_menu->result_array() as $s)
	{
		if($s['id']==$id)
		{
		echo "<option value='".$s['id']."' selected>".$s['id']." - ".$s['title']."</option>";
		}
		else
		{
		echo "<option value='".$s['id']."'>".$s['id']." - ".$s['title']."</option>";
		}
	}
	
	?>	
	</select> 
	</div>
			
			<label class="control-label" for="title_l">Title</label>
			<div class="controls">
				<textarea style="width:350px; height:200px;" name="content" id="editor">
				<?php 
					foreach($data_content->result_array() as $d) 
					if($d['data_id']==$id) echo $d['content']; 
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
		  </div>
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
			  <input type="hidden" name="st" value="<?php echo $st; ?>">
			</div>
		  </div>
		<script>
			$(".chzn-select").chosen().change(function(){ 
					var id = $("#id").val(); 
					$.ajax({ 
					url: "<?php echo base_url(); ?>app_admin_statis/#", 
					data: "id="+id, 
					cache: false, 
					success: function(msg){ 
					$("#id").empty();
					$("#title").empty();

				} 
			})
			});
		</script>
			<script type="text/javascript">$(".chzn-select-tps").chosen();</script>
		<?php echo form_close(); ?>
	</div>    
	</div>
	</div>
  </body>

