@extends('layout.default')
@section('content')

<section class="home_page_feed">  
 
        {!! Form::open(['url' => '#', 'class' => 'form-signin', 'files' => true, ] ) !!}
 
        <h2 class="form-signin-heading">Please sign in</h2>
        <div class="inpuutbox">
        <span><label for="inputEmail" class="sr-only">Title</label></span>
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Post Title', 'required', 'autofocus', 'id' => 'inputTitle' ]) !!}
        </div>
        <div class="inpuutbox">
        <span><label for="inputPassword" class="sr-only">Content</label></span>
        {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Post Content', 'id' => 'inputContent' ]) !!}
        </div>
 		<div class="inpuutbox">
        <span>Image</span>
        	<div id="img-thumb-preview">
      		<img id="img-thumb" class="uploadfile" src="{{ asset('assets/img/default-user-image.png') }}" width="200">
      		<input name="postpic" id="postpic" type="file" style="display:none;" />
    	</div>
        <div class="submitbox">
        	{!! Form::submit('Add Post') !!}
        </div>
 
        {!! Form::close() !!}
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
	
    jQuery("#postpic").trigger('click');
});


jQuery("#postpic").change(function(){
        readURL(this);
});
</script>
@stop
