<?php if(count($list_banner)) {?>
<div class="index-banner">
  	<div class="wrap">
   		<div class="wmuSlider sliders">
   			<?php foreach($list_banner as $banner) {?>
   			<article style="position: absolute; width: 100%; opacity: 0;"> 
			   	<div class="banner-wrap">
					<div class="cont span_2_of_3">
					    <h1><?php echo $banner->title;?></h1>
					</div>
	    		</div>
				<div class="banner">
				     <img src="<?php echo base_url($banner->image)?>" alt=""/> 
				</div>
			 </article>
			 <?php }?>
   		</div>
   	</div>
</div>
<?php }?>