<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
			<li><a href="<?php echo base_url()?>admin/pages">Pages</a></li>
			<li class="active">Tambah Pages</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<p class="pull-right"><a href="<?php echo base_url()?>admin/pages" class="btn btn-primary" title="kembali"> Kembali</a></p>

		<?php echo $this->load->view('admin/pages/_form');?>
	</div>
</div>