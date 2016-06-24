<?php $this->load->view('templates/site/slider');?>

<div class="main">
	<div class="wrap">
		<div class="content-top">
			<?php if(count($list_page_category) > 0){?>
				<?php foreach($list_page_category as $category){?>
				<div class="col_1_of_3 span_1_of_3">
					<h3><?php echo $category->name;?></h3>
					<img src="<?php echo base_url(get_image($category->image));?>" width="128">
					<p><?php echo word_limiter($category->description,20);?></p>
					<div class="btn-link">
						<a href="<?php echo base_url()?>site/services#<?php echo url_regex($category->name);?>">read more</a>
					</div>
				</div>
				<?php }?>
			<?php }?>
			<div class="clear"></div>
		</div>
	</div>

	<div class="content-bottom">
		<div class="wrap">
			<h2 class="head">News</h2>
			<div class="bottom-box">
				<?php if(count($list_news) > 0){?>
					<?php foreach($list_news as $news){?>
					<div class="col_1_of_4 span_1_of_4">
						<div class="text">
							<h4 class="blog_title">
								<a href="<?php echo base_url('blog/detail/'.$news->id_post.'/'.url_regex($news->title))?>"><?php echo $news->title;?></a>
							</h4>
							<div class="blog_info"><time><?php echo format_tanggal_indonesia($news->post_date);?></time> / <?php echo $this->My_model->get_user($news->id_user,'name');?></div>
							<img src="<?php echo base_url(get_image($news->image));?>">
							<p><?php echo word_limiter($news->content,20)?></p>
						</div>
					</div>
					<?php }?>
				<?php }else{?>
					<p>This post not found...</p>
				<?php }?>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>