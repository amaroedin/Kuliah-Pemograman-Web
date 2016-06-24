<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo site_title;?> | <?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style-admin.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- CKeditor -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/ckeditor/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#Pages_content,#PagesCategory_description,#Posts_content,#Map_content').ckeditor();
            <?php if(isset($this->class_nav)){?>
            $("ul.nav li").removeClass('active');
            $("ul.nav li.<?php echo $this->class_nav?>").addClass('active');
            <?php }?>
        });
    </script>

    <style type="text/css">
    	.error{color: red;}
        table.table>tbody>tr>td{vertical-align: inherit;}
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a href="<?php echo base_url()?>admin/dashboard" class="navbar-brand">Portal Web Profile</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <?php echo $this->load->view('templates/admin/navigasi');?>

                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('name');?> [ <?php echo $this->My_model->get_user_group($this->session->userdata('id_group'),'name');?> ]</a>
                    </li>
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Syste">System <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>admin/login/sign_out" onclick="javascript:if(confirm('Apakah anda yakin ingin logout dari halaman admin ?')){return true;}return false;" title="Logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                            <li><a href="<?php echo base_url()?>" title="Site portal web" target="_blank"><i class="fa fa-home"></i> Site Portal Web</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper">