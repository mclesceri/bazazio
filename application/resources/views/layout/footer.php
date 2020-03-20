<div class="medium-12 columns logo show-for-medium-only"> <img src="<?php echo asset('assets/img/logo_on_white.jpg')?>" alt="Bazazio Logo"/> </div>
<footer class="main_footer">
  <div class="large-8 medium-12 small-9 columns strevda">
  <?php $banners = App\Banner::getBanners('bottom');
  foreach($banners as $banner)
  {?>
  <img src="<?php echo asset('banners/'.$banner->path);?>" alt="234x60 advert"/> 
  <?php } ?>
  </div>
  <div class="large-4 hide-for-medium-down columns logo"> <img src="<?php echo asset('assets/img/logo_on_gray.jpg');?>" alt="Bazazio Logo"/> </div>
  <div class="small-3 show-for-small-only columns logo_small"> <img src="<?php echo asset('assets/img/logo_on_gray.jpg');?>" alt="Bazazio Logo"/> </div>
</footer>
