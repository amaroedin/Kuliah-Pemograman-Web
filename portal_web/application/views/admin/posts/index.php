<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
			<li class="active">Post Item</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<p><a href="<?php echo base_url()?>admin/posts/create" class="btn btn-success" title="tambah data">Tambah Data</a></p>

		<div class="panel panel-info">
			<div class="panel-heading">Data Post</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th width="3%">No</th>
								<th width="7%">Aksi</th>
								<th width="15%">Gambar</th>
								<th>Kategori</th>
								<th>Judul</th>
								<th>Deskripsi</th>
								<th width="10%">Tgl Posting</th>
								<th width="10%">Oleh</th>
							</tr>
						</thead>
						<tbody>
							<?php if($total_data > 0) {?>
							<?php 	$no=1; foreach($data_obj as $row) {?>
							<tr>
								<td class="text-center"><?php echo $no;?></td>
								<td class="text-center">
									<a href="<?php echo base_url()?>admin/posts/update/<?php echo $row->id_post;?>" title="edit"><i class="fa fa-pencil"></i></a>
									<a href="<?php echo base_url()?>admin/posts/delete/<?php echo $row->id_post;?>" class="delete" title="delete"><i class="fa fa-trash-o"></i></a>
								</td>
								<td><img src="<?php echo base_url();?><?php echo get_image($row->image);?>" width="150"></td>
								<td><?php echo $this->My_model->get_post_category($row->id_category,'name');?></td>
								<td><?php echo $row->title;?></td>
								<td><?php echo word_limiter($row->content, 5);?></td>
								<td><?php echo convert_date($row->post_date,'tgl');?></td>
								<td><?php echo $this->My_model->get_user($row->id_user,'name');?></td>
							</tr>
							<?php 	$no++; }?>
							<?php }else{?>
							<tr>
								<td colspan="8"><?php echo data_empty;?></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>