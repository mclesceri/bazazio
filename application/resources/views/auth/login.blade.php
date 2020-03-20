@extends('layout.default')
@section('content')

<section class="home_page_feed">  
 
        {!! Form::open(['url' => '#', 'class' => 'form-signin' ] ) !!}
 
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
        <label for="inputPassword" class="sr-only">Password</label>
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}
 
        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember', 1) !!} Remember me
 
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p><a href="#">Forgot password?</a></p>
 
        <p class="or-social">Or Use Social Login</p>
 
        <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-lg btn-primary btn-block facebook" type="submit">Facebook</a>
        <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}" class="btn btn-lg btn-primary btn-block twitter" type="submit">Twitter</a>
        <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-lg btn-primary btn-block google" type="submit">Google</a>
 
        {!! Form::close() !!}
 </section>
@stop
