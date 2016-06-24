<?php echo form_open($form_action, array('class'=>'form-horizontal'));?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Form User</h3>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<?php echo form_label('User Group','id_group',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $id_group = isset($data_set->id_group) ? $data_set->id_group : '';?>
				<?php echo listDropdown('Users','id_group',$list_user_group,$id_group, array('class'=>'form-control','style'=>'width:200px;'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Nama','name',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $name = isset($data_set->name) ? $data_set->name : '';?>
				<?php echo inputText('Users','name',$name,array('class'=>'form-control','style'=>'width:40%'));?>
			</div>
		</div>
		<div class="form-group">
			<?php echo form_label('Username','username',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php $username = isset($data_set->username) ? $data_set->username : '';?>
				<?php echo inputText('Users','username',$username,array('class'=>'form-control','style'=>'width:40%'));?>
			</div>
		</div>
		<?php if(!isset($data_set)) {?>
		<div class="form-group">
			<?php echo form_label('Password','password',array('class'=>'col-md-2 control-label'));?>
			<div class="col-md-10">
				<?php //$password = isset($data_set->password) ? $data_set->password : '';?>
				<?php echo inputText('Users','password','',array('class'=>'form-control','style'=>'width:40%'));?>
			</div>
		</div>
		<?php }?>
		<div class="form-group">
			<div class="col-md-12">
				<button type="reset" name="batal" class="btn btn-danger">Reset</button>
				<button type="submit" name="simpan" class="btn btn-info">Simpan</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close();?>