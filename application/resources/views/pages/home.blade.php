@extends('layout.default')
@section('content')

<section class="home_page_feed"> 
	@foreach($posts as $post)
  <!--Feed Post One-->
  <article class="home_page_feed_item picture_status"> <span class="profile_picture" style="background-image: url(profilepic/{!! App\User::getProfilePic($post->author) !!})"></span>
  @if($post->image != '')
    <div class="large-3 medium-6 small-12 columns picture_status_preview"> <img src="postpics/{!! $post->image !!}" alt="{!! $post->title !!}" /> </div>
    <div class="large-3 medium-6 small-12 columns picture_status_content">
  @else
  	<div class="large-6 medium-12 small-12 columns textual_status_content">
  @endif
      <div class="vertically_center_content">
        <h3>{!! $post->title !!}</h3>
        <p>{!! $post->content !!}</p>
        <ul class="hashtags">
          <li> <a href="#"> #blessed </a> </li>
          <li> <a href="#"> #loving-life </a> </li>
          <li> <a href="#"> #health-and-exercise </a> </li>
        </ul>
        <div class="user_interaction">
          <div class="approval"> <span class="approvals_current approval_item"> <span class="fa fa-heart"></span>{!! App\Post::postLikes($post->id) !!} </span> 							 			<span class="approvals_up approval_item">
          @if (App\Post::postLiked($post->id))
          <span class="fa fa-thumbs-up"></span>
          @else
          <a href="post/like/{!! $post->id !!}"><span class="fa fa-thumbs-up"></span></a>
          @endif
          </span> 
          	<span class="approvals_down approval_item"><a href="post/dislike/{!! $post->id !!}"><span class="fa fa-thumbs-down"></span></a></span> </div>
        </div>
        <div class="user_interaction" style="margin-left: 20px;">
          <div class="share_it"> <span class="approvals_current approval_item"><span class="st_sharethis_hcount"></span></span></div>
        </div>
      </div>
    </div>
    <div class="large-5 medium-12 small-12 columns status_comments">
      <div class="comment_section">
        <ul class="comments_spoken comment_scroll">
        @if(App\Post::getComments($post->id))
        @foreach(App\Post::getComments($post->id) as $comment)
          <li class="comment"> <span class="profile_pic" style="background-image: url(profilepic/{!! App\User::getProfilePic($comment->comment_author) !!})"></span> <span class="comment_text">{!! $comment->comments !!}</span> </li>
          @endforeach
          @endif
        </ul>
        {!! Form::open(array('url' => '/post/addcomment', 'method' => 'post', 'class'=>'speak_up')) !!}
          <span class="chat_button fa fa-comment"></span>
          <input type="text" name="comment" id="comment" placeholder="Your Comment..." />
          <input type="submit" name="submitcomment" value="Post">
          <input type="hidden" name="postid" value="{!! $post->id !!}">
        {!! Form::close() !!}
      </div>
    </div>
  </article>
  @endforeach
  <!--Feed Post Two-->
  
  <!--Feed Post Three-->
  
  <!--Feed Post Four-->
  
  <!--Feed Post Five-->
  
</section>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "15e00f4b-e4c8-4a4f-addc-dbc10900c182", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>
@stop