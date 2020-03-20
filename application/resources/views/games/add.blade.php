@extends('layout.default')
@section('content')

<section class="home_page_feed">  
 
        {!! Form::open(['url' => '#', 'class' => 'form-signin', 'files' => true, ] ) !!}
 
        <h2 class="form-signin-heading">Add Game</h2>
        <div class="inputbox">
        <span><label for="inputEmail" class="sr-only">Title</label></span>
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Game Title', 'required', 'autofocus', 'id' => 'inputTitle' ]) !!}
        </div>
 		<div class="inputbox">
        <span>Game Image</span>
        	<div id="img-thumb-preview">
      		<img id="img-thumb" class="uploadfile" src="{{ asset('assets/img/default-user-image.png') }}" width="200">
            {!! Form::file('postpic',['id'=>'postpic','style'=>'display:none']) !!}
    		</div>
        </div>
        <div class="radiobox">
        <span><label for="inputEmail" class="sr-only">Game Type</label></span>
        {!! Form::radio('gametype',' html5', true) !!} HTML5
        <br>
        {!! Form::radio('gametype', 'flash') !!} Flash
        </div>
        <div class="inputbox">
        <span>Upload Game</span>
        	
         {!! Form::file('gamedata',['id'=>'gamedata']) !!}
    		
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
