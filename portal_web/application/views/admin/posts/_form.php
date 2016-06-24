<?php echo form_open_multipart($form_action, array('class'=>'form-horizontal'));?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Form Post</h3>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<?php echo form_label('Kategori','id_category',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $id_category = isset($data_set->id_category) ? $data_set->id_category : '';?>
				<?php echo listDropdown('Posts','id_category',$list_post_category,$id_category, array('class'=>'form-control','style'=>'width:200px;'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Judul','title',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $title = isset($data_set->title) ? $data_set->title : '';?>
				<?php echo inputText('Posts','title',$title,array('class'=>'form-control','style'=>'width:60%'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Gambar','image',array('class'=>'col-md-2 control-label'))?>
			<div class="col-md-10">
				<?php $image = isset($data_set) ? $data_set->image : '';?>
				<?php echo form_upload('image');?>
				<?php echo form_hidden('image_tmp',$image);?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Konten','content',array('class'=>'col-md-2 control-label'))?>
			<div class="col-md-10">
				<?php $content = isset($data_set) ? $data_set->content : '';?>
				<?php echo inputTextArea('Posts','content',$content,array('class'=>'form-control','rows'=>10));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Tanggal','post_date',array('class'=>'col-md-2 control-label'))?>
			<div class="col-md-10">
				<?php $post_date = isset($data_set) ? convert_date($data_set->post_date,'tgl') : gmt('date','dmy');?>
				<?php echo inputText('Posts','post_date',$post_date, array('class'=>'form-control','style'=>'width:100px;'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Status','status',array('class'=>'col-md-2 control-label'))?>
			<div class="col-md-10">
				<?php $status = isset($data_set) ? $data_set->status : '';?>
				<?php echo listDropdown('Posts','status',$list_status,$status, array('class'=>'form-control','style'=>'width:100px;'));?>
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