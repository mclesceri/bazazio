@extends('layout.default')
@section('content')

<section class="register_page"> 

    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/chats.css')}}" rel="stylesheet">

	<div class="large-3 medium-12 small-12 columns">
    	<ul class="friendlist">
        @foreach(App\Chat::getFriends(Auth::user()->id) as $friend)
        	<li>
            <div class="userdetail">
            <div class="chatname">
            {!! App\User::getUSerDetail($friend->friend_id)->username; !!}
            </div>
            <div class="chatstat">
            	{!! App\User::getUSerDetail($friend->friend_id)->city; !!}/{!! App\User::getUSerDetail($friend->friend_id)->city; !!}
            </div>
            </div>
            </li>
        @endforeach
        </ul>
    </div>
    <div class="large-5 medium-12 small-12 columns">
        <div id="chat-window" class="col-lg-12">

        </div>
        <div class="col-lg-12">
            <div id="typingStatus" class="col-lg-12" style="padding: 15px"></div>
            <input type="text" id="text" class="form-control col-lg-12" autofocus onblur="notTyping()">
            <input type="button" name="send" value="send" id="send">
        </div>
    </div>

    <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/chats.js')}}"></script>
</section>

@stop