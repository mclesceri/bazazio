@extends('layout.default')
@section('content')
<!--<link rel="stylesheet" href="{{ URL::asset('assets/dropzone/dropzone.css')}}">
<script type="text/javascript" src="{{ URL::asset('assets/dropzone/dropzone.js')}}"></script>-->
<section class="home_page_feed"> 
  <!--Feed Post One-->
  <article class="home_page_feed_item picture_status">
    
    <div class="large-3 medium-6 small-12 columns picture_status_content">
     {!! Form::open(array('route' => 'profile.upload', 'method' => 'POST', 'id' => 'my-dropzone', 'class' => 'dropzone', 'files' => true)) !!}
    <div id="img-thumb-preview">
    @if(Auth::user()->profile_pic)
    	<img id="img-thumb" class="uploadfile" src="profilepic/{!! Auth::user()->profile_pic !!}" width="200">
    @else
      <img id="img-thumb" class="uploadfile" src="{{ asset('assets/img/default-user-image.png') }}" width="200">
    @endif
      <input name="profilepic" id="profilepic" type="file" style="display:none;" />
    </div>
    <button id="upload-submit" class="btn btn-default margin-t-5"><i class="fa fa-upload"></i> Upload</button>
  	{!! Form::close() !!}
    </div>
    
    <div class="large-3 medium-6 small-12 columns picture_status_content">
     {!! Form::open(array('route' => 'profile.update', 'method' => 'POST', 'id' => 'profile-update', 'class' => 'profileupdate', 'files' => true)) !!}
    <div class="inputbox">
    	<span class="lable">{!! Form::label('name', 'Name') !!}</span>
     	{!! Form::text('name', Auth::user()->username, array('class'=>'','placeholder' => 'Name')) !!}
    </div>
    <div class="inputbox">
    	<span class="lable">{!! Form::label('name', 'Location') !!}</span>
     	{!! Form::text('location',Auth::user()->location, array('class'=>'','placeholder' => 'Location')) !!}
    </div>
    <div class="inputbox">
    	<span class="lable">{!! Form::label('name', 'City') !!}</span>
    	 {!! Form::text('city', Auth::user()->city, array('class'=>'','placeholder' => 'City')) !!}
    </div>
    <div class="inputbox">
    	<span class="lable">{!! Form::label('name', 'State') !!}</span>
    	 {!! Form::text('state', Auth::user()->state, array('class'=>'','placeholder' => 'State')) !!}
    </div>
    <div class="inputbox">
    	<span class="lable">{!! Form::label('name', 'Country') !!}</span>
     	{!! Form::text('country', Auth::user()->country, array('class'=>'','placeholder' => 'Country')) !!}
    </div>
    <div class="submitbox">
    {!! Form::submit('Update') !!}
    </div>
  	{!! Form::close() !!}
    </div>
  </article>
  
</section>
<script language="javascript" type="text/javascript">

function readURL(input) 
{
   if (input.files && input.files[0]) 
   {
      var reader = new FileReader();
	  reader.onload = function (e) {
              jQuery('#img-thumb').attr('src', e.target.result);
      }
	reader.readAsDataURL(input.files[0]);
    }
}


jQuery(".uploadfile").click(function () {
	
	var fileid = this.id;
	
    jQuery("#profilepic").trigger('click');
});


jQuery("#profilepic").change(function(){
        readURL(this);
});
</script>

@stop