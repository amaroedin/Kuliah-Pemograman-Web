<?php echo form_open_multipart($form_action, array('class'=>'form-horizontal'));?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Form Page</h3>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<?php echo form_label('Kategori','id_category',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $id_category = isset($data_set) ? $data_set->id_category : '';?>
				<?php echo listDropdown('Pages','id_category',$list_pages_category,$id_category, array('class'=>'form-control','style'=>'width:200px;'));?>
			</div>
		</div>
		<!-- <div class="form-group">
			<?php /*echo form_label('Nama','name',array('class'=>'col-md-2 control-label'))?>
			<div class="col-md-10">
				<!-- <p class="form-control-static"><?php //echo isset($data_set) ? $data_set->name : '';?></p> -->
				<?php $name = isset($data_set) ? $data_set->name : '';?>
				<?php echo inputText('Pages','name',$name,array('class'=>'form-control','style'=>'width:60%'));*/?>
			</div>
		</div> -->
		<div class="form-group">
			<?php echo form_label('Judul','title',array('class'=>'col-md-2 control-label'))?>
			<div class="col-md-10">
				<?php $title = isset($data_set) ? $data_set->title : '';?>
				<?php echo inputText('Pages','title',$title,array('class'=>'form-control','style'=>'width:60%'));?>
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
				<?php echo inputTextArea('Pages','content',$content,array('class'=>'form-control','rows'=>10));?>
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