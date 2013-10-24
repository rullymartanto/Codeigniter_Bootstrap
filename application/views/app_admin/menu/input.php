
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/chosen.css" rel="stylesheet">
	<style>
		body{
			margin:20px;
			}
	</style>
	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/chosen.jquery.js"></script>
	
	<script src="<?php echo base_url(); ?>js/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>js/kcfinder/ckfinder.js"></script>
	
  </head>

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
		<?php echo form_open_multipart('app_admin_statis/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Menu Statis</legend>
			<label class="control-label" for="nama_hukuman">Nama Menu</label>
				<div class="controls">
					<select name="data_id" class="input"  >
					<?php
					foreach($data_get->result_array() as $s)
					{
						echo "<option value='".$s['id']."'>".$s['id']." - ".$s['title']."</option>";
					}
					?>	
					</select>
		  </div>

				<div class="control-group">
				<label class="control-label" for="nama_hukuman">Alamat</label>
						<div class="controls">
				<textarea style="width:350px; height:200px;" name="content" id="editor">

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
					<button type="reset" class="btn">Hapus Data</button>
					<input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
					<input type="hidden" name="st" value="<?php echo $st; ?>">
					</div>
				</div>
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
  </body>
</html>
