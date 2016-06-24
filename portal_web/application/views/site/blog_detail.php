<div class="main">
	<div class="wrap">
		<div class="single-top">
			<div class="cont span_2_of_3">
				<h3><?php echo $set_data->title;?></h3>
				<div class="extra">
					<time pubdate datetime="<?php echo $set_data->post_date;?>"><?php echo format_tanggal_indonesia($set_data->post_date);?></time>
					 / 
					<?php echo $this->My_model->get_user($set_data->id_user,'name');?>
				</div>
				<img src="<?php echo base_url(get_image($set_data->image));?>">
				<?php echo $set_data->content;?>
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