<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
			<li><a href="<?php echo base_url()?>admin/contact">Kontak</a></li>
			<li class="active">Tambah Kontak</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<?php echo $this->load->view('admin/contacts/_form');?>
	</div>
</div>