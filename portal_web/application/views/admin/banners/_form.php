<?php echo form_open_multipart($form_action, array('class'=>'form-horizontal'));?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Form Slide Show</h3>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<?php echo form_label('Judul','title',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $title = isset($data_set->title) ? $data_set->title : '';?>
				<?php echo inputText('Banners','title',$title,array('class'=>'form-control','style'=>'width:60%'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Konten','content',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $content = isset($data_set->content) ? $data_set->content : '';?>
				<?php echo inputTextArea('Banners','content',$content,array('class'=>'form-control','rows'=>4,'style'=>'width:60%'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Gambar','image',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $image = isset($data_set->image) ? $data_set->image : '';?>
				<?php echo form_upload('image');?>
				<?php echo form_hidden('image_tmp',$image);?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Status','status',array('class'=>'col-md-2 control-label'))?>
			<div class="col-md-10">
				<?php $status = isset($data_set->status) ? $data_set->status : '';?>
				<?php echo listDropdown('Banners','status',$list_status,$status, array('class'=>'form-control','style'=>'width:100px;'));?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<button type="reset" name="batal" class="btn btn-danger">Reset</button>
				<button type="submit" name="simpan" class="btn btn-info">Simpan</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close();?>