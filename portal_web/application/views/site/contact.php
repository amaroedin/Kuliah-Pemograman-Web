<div class="work-top">
	 <div class="wrap">
	 	<div class="single-left">
	 		<h1><?php echo $title;?></h1>
	 	</div>
	 	<div class="clear"></div>
	  </div>
</div>
<div class="main">
	<div class="contact">
		 <div class="wrap">
			<div class="section group example">
			<div class="col_1_of_2 span_1_of_2">
			  <div class="contact-form">
		        <?php echo form_open('contact/create');?>
			    	<div>
				    	<span><label>Name</label></span>
				    	<span><?php echo inputText('Contact','name','');?></span>
				    </div>
				    <div>
				    	<span><label>E-Mail</label></span>
				    	<span><?php echo inputText('Contact','email','');?></span>
				    </div>
				    <div>
				    	<span><label>Message</label></span>
				    	<span><?php echo inputTextArea('Contact','comment','');?></span>
				    </div>
				    <div>
				    	<span>Ketikan teks seperti gambar berikut</span>
				    	<?php echo $captcha->get_captcha()?>
				    	<span><?php echo form_input(array('name'=>'captcha','id'=>'captcha'));?></span>
				    </div>
				    <?php if($this->session->flashdata('message') !=''){?>
				    	<span style="color:red;"><?php echo $this->session->flashdata('message');?></span>
				    <?php }?>
				   	<div>
				   		<span><input type="submit" value="Submit"></span>
				  	</div>
			    <?php echo form_close();?>
			  </div>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<div class="contact-form">
						<div>
							<h3 style="color:black;"><?php echo $location->title;?></h3>
							<?php echo $location->content;?>
						</div>
					</div>
					<div id="map" style="height:350px;"></div>
				</div>
			<div class="clear"></div>
	    </div>
		  </div>
	</div>	
</div>

<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
	function initialize() {
	  var myLatlng = new google.maps.LatLng(<?php echo $location->latitude;?>,<?php echo $location->langitude?>);
	  var mapOptions = {
	    zoom: 16,
	    center: myLatlng
	  }
	  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

	  var marker = new google.maps.Marker({
	      position: myLatlng,
	      map: map,
	      title: 'Lokasi Kami'
	  });
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>