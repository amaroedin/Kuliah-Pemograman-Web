<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
			<li class="active">Page Kategori</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<p><a href="<?php echo base_url()?>admin/pages_category/create" class="btn btn-success" title="tambah data">Tambah Data</a></p>

		<div class="panel panel-info">
			<div class="panel-heading">Data Page Kategori</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th width="3%">No</th>
								<th width="7%">Aksi</th>
								<th width="15%">Gambar</th>
								<th>Nama</th>
								<th>Deskripsi</th>
							</tr>
						</thead>
						<tbody>
							<?php if($total_data > 0) {?>
							<?php 	$no=1; foreach($data_obj as $row) {?>
							<tr>
								<td class="text-center"><?php echo $no;?></td>
								<td class="text-center">
									<a href="<?php echo base_url()?>admin/pages_category/update/<?php echo $row->id_category;?>" title="edit"><i class="fa fa-pencil"></i></a>
									<a href="<?php echo base_url()?>admin/pages_category/delete/<?php echo $row->id_category;?>" class="delete" title="delete"><i class="fa fa-trash-o"></i></a>
								</td>
								<td><img src="<?php echo base_url(get_image($row->image))?>" width="150"></td>
								<td><?php echo $row->name;?></td>
								<td><?php echo word_limiter($row->description,20);?></td>
							</tr>
							<?php 	$no++; }?>
							<?php }else{?>
							<tr>
								<td colspan="5"><?php echo data_empty;?></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>