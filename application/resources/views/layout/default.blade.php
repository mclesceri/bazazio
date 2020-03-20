<!doctype html>
<html>
<head>
<!-- my head section goes here -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf_token" content="{{ csrf_token() }}" />
<title>Bazazio</title>		
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet' id='Primary-Stylesheet-css'  href="{{ URL::asset('assets/css/style.css') }}" type='text/css' media='all' />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<!-- my css and js goes here -->

</head>
<body>
<aside class="off-canvas off-canvas-menu-alignright">
	<span class='fa fa-close close_off_canvas'></span>
	<div class="off-canvas-inner">
		    	<ul>
					<li>
						<a href="#">
							<span class="fa fa-home"></span>
							Profile
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-rss"></span>
							Updates
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-users"></span>
							Buddies
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-plus-square"></span>
							More
						</a>
					</li>
				</ul>
	</div>
</aside>
<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
		<!--HEADER START-->
        
		@include('layout.header')
        
        <!--HEADER ENDS-->
        <div class="sub_header">
        
        <!--Start Right Side Navigation (circles)-->
  		@include('layout.sidebar')
        <!--End Rightside Navigation (circles)-->
        
  		<!--Start Feed-->
        @yield('content')
        <!--End Feed-->
        
  		<footer> @include('layout.footer') </footer>
        </div>
	</div>
</div>

<script async type="text/javascript" src="{{ URL::asset('assets/js/vendor/perfect-scrollbar.jquery.min.js')}}"></script>
<script async type="text/javascript" src="{{ URL::asset('assets/js/vendor/SmoothScroll.js')}}"></script>
<script async type="text/javascript" src="{{ URL::asset('assets/js/main.js')}}"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#dob" ).datepicker();
	$( "#eventdate" ).datepicker();
  });
  </script>
</body>
</html>