<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
			<li class="active">Slide Show</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<p><a href="<?php echo base_url()?>admin/banners/create" class="btn btn-success" title="tambah data">Tambah Data</a></p>

		<div class="panel panel-info">
			<div class="panel-heading">Data Slide Show</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th width="3%">No</th>
								<th width="7%">Aksi</th>
								<th width="15%">Gambar</th>
								<th>Judul</th>
								<th>Konten</th>
								<th width="10%">Status</th>
								<th width="10%">Oleh</th>
							</tr>
						</thead>
						<tbody>
							<?php if($total_data > 0) {?>
							<?php 	$no=1; foreach($data_obj as $row) {?>
							<tr>
								<td class="text-center"><?php echo $no;?></td>
								<td class="text-center">
									<a href="<?php echo base_url()?>admin/banners/update/<?php echo $row->id_banner;?>" title="edit"><i class="fa fa-pencil"></i></a>
									<a href="<?php echo base_url()?>admin/banners/delete/<?php echo $row->id_banner;?>" class="delete" title="delete"><i class="fa fa-trash-o"></i></a>
								</td>
								<td><img src="<?php echo base_url();?><?php echo get_image($row->image);?>" width="150"></td>
								<td><?php echo $row->title;?></td>
								<td><?php echo word_limiter($row->content, 10);?></td>
								<td><?php echo $this->My_model->get_status($row->status);?></td>
								<td><?php echo $this->My_model->get_user($row->id_user,'name');?></td>
							</tr>
							<?php 	$no++; }?>
							<?php }else{?>
							<tr>
								<td colspan="7"><?php echo data_empty;?></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>