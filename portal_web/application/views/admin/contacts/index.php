<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
			<li class="active">Kontak</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">Data Kontak</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th width="3%">No</th>
								<th width="5%">Aksi</th>
								<th>Nama</th>
								<th>No Telpon</th>
								<th>Email</th>
								<th>Komentar</th>
								<th width="15%">Tanggal</th>
							</tr>
						</thead>
						<tbody>
							<?php if($total_data > 0) {?>
							<?php 	$no=1; foreach($data_obj as $row) {?>
							<tr>
								<td class="text-center"><?php echo $no;?></td>
								<td class="text-center">
									<!-- <a href="<?php //echo base_url()?>admin/contact/update/<?php echo $row->id_contact;?>" title="edit"><i class="fa fa-pencil"></i></a> -->
									<a href="<?php echo base_url()?>admin/contact/delete/<?php echo $row->id_contact;?>" class="delete" title="delete"><i class="fa fa-trash-o"></i></a>
								</td>
								<td><?php echo $row->name;?></td>
								<td><?php echo $row->no_telp;?></td>
								<td><?php echo $row->email;?></td>
								<td><?php echo nl2br(word_limiter($row->comment, 10));?></td>
								<td><?php echo convert_date($row->date_create);?></td>
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