<header class="main_banner" style="background-image: url(<?php echo URL::asset('assets/img/main_banner.jpg'); ?>);"> 
  <!--Start Primary Navigation bar (black, and profile pic)-->
  <nav class="main_nav_bar">
    <ul>
      <li class="new_status"> <a href="<?php echo url('#', $parameters = [], $secure = null);?>"> <span class="fa fa-list-alt"></span> New Status </a> </li>
      <li class="menu-cont"> <a href="<?php echo url('#', $parameters = [], $secure = null);?>" class="show-for-small only"> <span class="fa fa-bars"></span> Menu </a> </li>
      <li class="menu-cont"> <a href="<?php echo url('#', $parameters = [], $secure = null);?>" class="show-for-medium only"> <span class="fa fa-bars"></span> Menu </a> </li>
      <li> <a href="<?php echo url('/profile', $parameters = [], $secure = null);?>" class="hide-for-small-only hide-for-medium-only"> <span class="fa fa-home" class="hide-for-small-only hide-for-medium-only"></span> Profile </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>" class="hide-for-small-only hide-for-medium-only"> <span class="fa fa-rss"></span> Updates </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>" class="hide-for-small-only hide-for-medium-only"> <span class="fa fa-users"></span> Buddies </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>" class="hide-for-small-only hide-for-medium-only"> <span class="fa fa-plus-square"></span> More </a> </li>
      <?php if(Auth::check()){ $profilepic = Auth::user()->profile_pic;}
  else{$profilepic = 'default-user-image.png';}
  ?>
      <li class="profile_pic hide-for-small-only"> <a href="#"> <span class="profile_pic_bounds" style="background-image: url(<?php echo URL::asset('profilepic/'.$profilepic);?>);"></span> </a> </li>
    </ul>
  </nav>
  <!--End Navigation bar--> 
  <!--Start Center Navigation (circles)-->
  
  <div class="profile_pic_centered show-for-small-only"> <a href="#"> <span class="profile_pic_bounds" style="background-image: url(<?php echo URL::asset('profilepic/'.$profilepic);?>);"></span> </a> </div>
  <nav class="side_navigation show-for-small-only">
    <ul>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>"> <span class="fa fa-rocket"></span> Live Stream </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>"> <span class="fa fa-gamepad"></span> Games </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>"> <span class="fa fa-film"></span> Movies </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>"> <span class="fa fa-user-secret"></span> Club 140 </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>"> <span class="fa fa-youtube-play"></span> YouTube </a> </li>
      <li> <a href="<?php echo url('#', $parameters = [], $secure = null);?>"> <span class="fa fa-comments"></span> Chat </a> </li>
    </ul>
  </nav>
  <!--End Center Navigation (circles)--> 
</header>
