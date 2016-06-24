<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo site_title;?> | <?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <style type="text/css">
    	body{margin-top: 50px;}
    	.login-panel{margin-top: 25%;}
    	.error{color: red;}
    </style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Administrator</h3>
                    </div>
                    <div class="panel-body">
                    	<?php echo form_open('admin/login/sign_in',array('class'=>'form-horizontal'));?>
                    	<fieldset>
                    		<div class="form-group">
                    			<label class="col-sm-3 control-label">Username</label>
                    			<div class="col-sm-8">
                    				<input type="text" name="username" class="form-control" placeholder="username" autofocus>
                    			</div>
                    		</div>
                    		<div class="form-group">
                    			<label class="col-sm-3 control-label">Password</label>
                    			<div class="col-sm-8">
                    				<input type="password" name="password" class="form-control" placeholder="password">
                    			</div>
                    		</div>
                    		<div class="form-group">
                    			<div class="text-center">
                    				<?php if($this->session->flashdata('message') !='') {?>
                    				<span class="error"><?php echo $this->session->flashdata('message');?></span>
                    				<?php }?>
                    			</div>
                    		</div>
                    		<div class="form-group">
                    			<div class="col-sm-11">
                    				<button type="submit" name="login" class="btn btn-success">Login</button>
                    			</div>
                    		</div>
                    	</fieldset>
                    	<?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>