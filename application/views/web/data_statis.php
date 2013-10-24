
<div class="row">
<div class="span9">
	<ul class="breadcrumb">

		<li class="divider"><a href="<?php echo base_url(); ?>">Home	</a></li>
		<li class="active">
				</li>
	</ul>
		<div class="caption">
						<?php 
					foreach($data_content->result_array() as $d) 
					if($d['data_id']==$data_id) echo $d['content']; 
				?>
</div>

</div>
	</div>
	</div>
</div>
	