@extends('layout.default')
@section('content')

<section class="register_page"> 

    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/chats.css')}}" rel="stylesheet">

	<div class="large-8 medium-12 small-12 columns">
    	<ul class="friendlist">
        @foreach($games as $game)
        	<li>
            <div class="userdetail">
            <div class="chatname">
            <img src="{{ URL::asset($game->image)}}" width="100" height="100">
            </div>
            <div class="chatstat">
            	{!! $game->title; !!}
            </div>
            </div>
            </li>
        @endforeach
        </ul>
    </div>
    <div class="large-8 medium-12 small-12 columns">
		<iframe src="{{ URL::asset($maingame->path)}}/index.html" width="100%" height="100%"></iframe>
    </div>
    <div class="share_it"> <span class="approvals_current approval_item"><span class="st_sharethis_hcount"></span></span></div>

    <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/chats.js')}}"></script>
</section>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "15e00f4b-e4c8-4a4f-addc-dbc10900c182", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>
@stop