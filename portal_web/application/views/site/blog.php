<div class="main">
	<div class="wrap">
		<div class="single-top">
			<div class="wrapper_single">
				<h4 class="m_2">Blog</h4>
				<?php if($total_data > 0) {?>
				<?php 	foreach($list_data as $blog) {?>
				<div class="wrapper_top">
					<div class="grid_1 alpha">
						<div class="date">
							<?php $tgl = convert_date($blog->post_date,'tgl');?>
							<span><?php echo _splite($tgl,'-',0);?></span>
							<?php echo switch_month(_splite($tgl,'-',1),'id','short');?>
							<?php echo _splite($tgl,'-',2);?>
						</div>
					</div>
					<div class="cont span_2_of_single">
						<h4 class="blog_title">
							<a href="<?php echo base_url('blog/detail/'.$blog->id_post.'/'.url_regex($blog->title));?>" title="<?php echo $blog->title?>"><?php echo $blog->title;?></a>
						</h4>
						<div class="blog_info">
							Oleh, <a href="#"><?php echo $this->My_model->get_user($blog->id_user,'name');?></a>
							Kategori <a href="#"><?php echo $blog->category_name;?></a>
						</div>
						<img src="<?php echo get_image($blog->image);?>" width="300">
						<p class="m_para"><?php echo word_limiter($blog->content,25);?></p>
						<a href="<?php echo base_url('blog/detail/'.$blog->id_post.'/'.url_regex($blog->title));?>" class="arrow_btn">Selengkapnya</a>
					</div>
					<div class="clear"></div>
				</div>
				<?php 	}?>
				<?php }else{?>
				<p><?php echo data_empty;?></p>
				<?php }?>
			</div>
			<div class="rsidebar span_1_of_3">
				<div class="sidebar">
					<h3>Pencarian</h3>
					<div class="search_box">
						<?php echo form_open('blog'.($category !='' ? '?category='.$category : ''),array('id'=>'form_search','class'=>'form-horizontal'));?>
							<input type="text" name="search" placeholder="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
						<?php echo form_close();?>
					</div>
				</div><br><br>
				<ul class="sidebar">
					<h3>Kategori</h3>
					<?php if(count($list_category) > 0) {?>
					<?php 	foreach($list_category as $category) {?>
					<li><a href="<?php echo base_url('blog?category='.$category->id_category);?>" title="<?php echo $category->name?>"><?php echo $category->name;?></a></li>
					<?php 	}?>
					<?php }?>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>