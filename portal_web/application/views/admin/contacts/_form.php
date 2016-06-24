<?php echo form_open($form_action, array('class'=>'form-horizontal'));?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Form Kontak</h3>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<?php echo form_label('Nama','name',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $name = isset($data_set->name) ? $data_set->name : '';?>
				<?php echo inputText('Contact','name',$name,array('class'=>'form-control','style'=>'width:50%'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Email','email',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $email = isset($data_set->email) ? $data_set->email : '';?>
				<?php echo inputText('Contact','email',$email,array('class'=>'form-control','style'=>'width:50%'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('No Telpon','no_telp',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $no_telp = isset($data_set->no_telp) ? $data_set->no_telp : '';?>
				<?php echo inputText('Contact','no_telp',$no_telp,array('class'=>'form-control','style'=>'width:20%'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Komentar','comment',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $comment = isset($data_set->comment) ? $data_set->comment : '';?>
				<?php echo inputTextArea('Contact','comment',$comment,array('class'=>'form-control','rows'=>5,'style'=>'width:80%'));?>
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