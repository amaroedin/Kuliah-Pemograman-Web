<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
			<li class="active">Post Kategori</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<p><a href="<?php echo base_url()?>admin/post_category/create" class="btn btn-success" title="tambah data">Tambah Data</a></p>

		<div class="panel panel-info">
			<div class="panel-heading">Data Post Kategori</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th width="3%">No</th>
								<th width="7%">Aksi</th>
								<th width="30%">Group Kategori</th>
								<th>Nama Kategori</th>
							</tr>
						</thead>
						<tbody>
							<?php if($total_data > 0) {?>
							<?php 	$no=1; foreach($data_obj as $row) {?>
							<tr>
								<td class="text-center"><?php echo $no;?></td>
								<td class="text-center">
									<a href="<?php echo base_url()?>admin/post_category/update/<?php echo $row->id_category;?>" title="edit"><i class="fa fa-pencil"></i></a>
									<a href="<?php echo base_url()?>admin/post_category/delete/<?php echo $row->id_category;?>" class="delete" title="delete"><i class="fa fa-trash-o"></i></a>
								</td>
								<td><?php echo $this->My_model->get_post_group($row->id_group,'name');?></td>
								<td><?php echo $row->name;?></td>
							</tr>
							<?php 	$no++; }?>
							<?php }else{?>
							<tr>
								<td colspan="4"><?php echo data_empty;?></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>