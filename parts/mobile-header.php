<div class='fixed'>
	<nav class="tab-bar show-for-small-only collapse row">
		<section class="right-small">
			<a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="small-6 columns tab-bar-section">
			<a href="<?php echo site_url(); ?>">
				<h1 class="title">
					<?php 
			            $primary_logo = get_header_image();
			            if(!empty($primary_logo)){
			                $logo_str = "<img src='" . $primary_logo . "' alt='" . get_bloginfo('name') . "'/>\n";
			            }else{
			                $logo_str = bloginfo('name');
			            }
			            echo $logo_str;	
		        	?>
				</h1>
			</a>
		</section>
	</nav>
</div>