<div class="row">
	<div class="col-lg-12">
		<h3><?php echo $title;?></h3>
		<ol class="breadcrumb">
			<li class="active">Dashboard</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="bs-example">
			<div class="jumbotron">
				<h1>Portal Web</h1>
				<p>Selamat datang dihalaman adminstrator Portal Web</p>
				<p>Anda login sebagai : <strong><?php echo $this->session->userdata('name');?></strong></p>
				<p>Login terakhir : <?php echo format_tanggal_indonesia($this->session->userdata('last_login'));?></p>
			</div>
		</div>
	</div>
</div>