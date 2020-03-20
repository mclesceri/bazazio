@extends('layout.default')
@section('content')

<section class="register_page"> 
  <!--Register Form-->
  <?php echo Form::open(array('url' => '/register', 'method' => 'post'));?>
  	<div class="inputbox">
  		<span><?php echo Form::label('firstname', 'First Name', array('class' => 'boxlabel'));?></span>
    	<?php echo Form::text('firstname', ''); ?>
        <p class="errors"><?php echo $errors->first('firstname');?></p>
  	</div>
  	<div class="inputbox">
  		<span><?php echo Form::label('lastname', 'Last Name', array('class' => 'boxlabel'));?></span>
    	<?php echo Form::text('lastname', ''); ?>
  	</div>
	<div class="inputbox">
  		<span><?php echo Form::label('email', 'Email', array('class' => 'boxlabel'));?></span>
    	<?php echo Form::text('email', ''); ?>
  </div>
  <div class="inputbox">
  	<span><?php echo Form::label('password', 'Password', array('class' => 'boxlabel'));?></span>
    <?php echo Form::password('password', ''); ?>
  </div>
  <div class="inputbox">
  	<span><?php echo Form::label('repassword', 'Re-Password', array('class' => 'boxlabel'));?></span>
    <?php echo Form::password('repassword', ''); ?>
  </div>
  <div class="inputbox">
  	<span><?php echo Form::label('dob', 'D.O.B', array('class' => 'boxlabel'));?></span>
    <?php echo Form::date('dob', \Carbon\Carbon::now()); ?>
  </div>
  <div class="inputbox">
  	<span><?php echo Form::label('terms', 'Terms', array('class' => 'boxlabel'));?></span>
    <?php echo Form::checkbox('terms', '1'); ?>
  </div>
  <div class="submitbox">
    <?php echo Form::submit('Submit'); ?>
  </div>


  <?php echo Form::close();?>
  <!--Register Form End-->
  
</section>

@stop