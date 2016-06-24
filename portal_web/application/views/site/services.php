<div class="work-top">
	<div class="wrap">
		<div class="single-left">
			<h1>Service</h1>
		</div>
		<?php if(count($list_page_category) > 0){?>
		<div class="single-menu">
			<ul>
				<?php foreach($list_page_category as $category){?>
				<li><a href="#<?php echo str_replace(' ', '-', $category->name);?>" class="scroll"><?php echo $category->name;?></a></li>
				<?php }?>
			</ul>
		</div>
		<?php }?>
		<div class="clear"></div>
	</div>
</div>

<div class="main">
	<?php if(count($list_page_category) > 0){?>
	<?php 	foreach($list_page_category as $key=>$category){?>
	<div class="grid-box<?php echo (($key > 0) ? $key : '');?>" id="<?php echo str_replace(' ', '-', $category->name)?>">
		<div class="wrap">
			<h4 class="single-head"><?php echo $category->name;?></h4>
			<div class="section group example">
				<?php if(count($list_page_category_item) > 0) {?>
				<?php 	$no=1;foreach($list_page_category_item as $category_item) {?>
				<?php 		if($category->id_category == $category_item->id_category) {?>
				<div class="col_1_of_2 span_1_of_2">
					<a class="popup-with-zoom-anim" href="#service-detail<?php echo $category_item->id_page;?>">
						<img src="<?php echo base_url(get_image($category_item->image));?>" title="<?php echo $category_item->title;?>">
					</a>
					<h3><?php echo $category_item->title;?></h3>
					<p><?php echo word_limiter($category_item->content,30);?></p>
				</div>
				<?php 		}else{?>
				<p><?php echo data_empty;?></p>
				<?php 		}?>
				<?php 	$no++;}?>
				<?php }?>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php 	}?>
	<?php }?>
</div>