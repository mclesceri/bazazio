@extends('layout.default')
@section('content')

<section class="home_page_feed">  
 
        {!! Form::open(['url' => '#', 'class' => 'form-signin', 'files' => true, ] ) !!}
 
        <h2 class="form-signin-heading">Make an Inquiry</h2>
        <div class="inpuutbox">
        <span><label for="inputEmail" class="sr-only">Name</label></span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Person Name', 'required', 'autofocus', 'id' => 'inputTitle' ]) !!}
        </div>
        <div class="inpuutbox">
        <span><label for="inputEmail" class="sr-only">Company</label></span>
        {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Company Name', 'required', 'autofocus', 'id' => 'inputTitle' ]) !!}
        </div>
        <div class="inpuutbox">
        <span><label for="inputEmail" class="sr-only">Phone</label></span>
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone', 'required', 'autofocus', 'id' => 'inputTitle' ]) !!}
        </div>
        <div class="inpuutbox">
        <span><label for="inputEmail" class="sr-only">Email</label></span>
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address', 'required', 'autofocus', 'id' => 'eventname' ]) !!}
        </div>
        
        <span><label for="inputEmail" class="sr-only">Event Name</label></span>
        {!! Form::text('eventname', null, ['class' => 'form-control', 'placeholder' => 'Event Name', 'required', 'autofocus', 'id' => 'eventname' ]) !!}
        </div>
        
        <span><label for="inputEmail" class="sr-only">Event Date</label></span>
        {!! Form::text('eventdate', null, ['class' => 'form-control', 'placeholder' => 'Event Date', 'required', 'autofocus', 'id' => 'eventdate' ]) !!}
        </div>
        
        <span><label for="inputEmail" class="sr-only">About the Event</label></span>
        {!! Form::textarea('aboutevent', null, ['class' => 'form-control', 'placeholder' => 'About the Event', 'required', 'autofocus', 'id' => 'inputTitle' ]) !!}
        </div>
        
        <span><label for="inputEmail" class="sr-only">Audience Attendance</label></span>
        {!! Form::number('email', null, ['class' => 'form-control', 'placeholder' => 'Audience Attendance', 'required', 'autofocus', 'id' => 'attendence' ]) !!}
        </div>
 
        <div class="submitbox">
        	{!! Form::submit('Send') !!}
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
