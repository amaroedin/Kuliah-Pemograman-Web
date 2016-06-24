<!DOCTYPE HTML>
<html>
<head>
<title>Portal Web | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="<?php echo base_url()?>assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url()?>assets/js/jquery.hoverdir.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.wmuSlider.js"></script>
	<style type="text/css">
		.about-desc p{
			text-align: justify;
		}
	</style>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
		});

		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});
	</script>
	<script type="text/javascript">
		$(function() {
		
			$('#da-thumbs > li ').each( function() { $(this).hoverdir({
				hoverDelay : 50,
				inverse : true
			}); } );

			$('.sliders').wmuSlider();

			<?php if(isset($active_menu)){?>
            $("#cssmenu ul li").removeClass('active');
            $("#cssmenu ul li.<?php echo $active_menu?>").addClass('active');
            <?php }?>
		});
    </script>
</head>
<body>
	<div class="single-header">	
		<div class="wrap">
			<div class="logo">
				<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/images/logo-1.png" width="170"></a>
		  	</div>
		  	<div class="header-right">
			 	<div id='cssmenu'>
					<ul>
						<li class="home"><a href="<?php echo base_url()?>" title="home"><span>Home</span></a></li> |
						<li class="has-sub about_us"><a href="<?php echo base_url('site/about_us')?>" title="about us"><span>About Us</span></a></li> |
						<li class="has-sub services"><a href="<?php echo base_url('site/services')?>" title="services"><span>Services</span></a></li> |
						<li class="has-sub blog"><a href="<?php echo base_url('blog')?>" title="blog"><span>Blog</span></a></li> |
						<li class="last contact"><a href="<?php echo base_url('contact')?>"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
      	</div>
    </div>