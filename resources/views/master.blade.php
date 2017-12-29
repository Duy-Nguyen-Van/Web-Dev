<!DOCTYPE html>
<html>
<head>
	@yield('title')
	<!-- Meta -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
    <!-- /Meta -->

	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Cinzel|Courgette|Dancing+Script|Gloria+Hallelujah|Indie+Flower|Lobster|Pacifico|Poiret+One|Quicksand|Roboto|Satisfy|Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
	<link rel="stylesheet" href="source/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/css/font-google.css">
	<!-- /Font -->

	<!-- Style -->
	<link rel="stylesheet" href="source/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/css/misc.css">
	<link rel="stylesheet" href="source/css/style.css">
	<link rel="stylesheet" href="source/css/custom.css">
	<!-- /Style -->
</head>

<body>
	<!-- Navigation -->
	<!-- .responsive-navigation -->
    <div class="responsive-navigation visible-sm visible-xs">
    	<div class="container">
			@yield('attr')
    		<!-- /.logo -->
    		<!-- .menu-toggle-btn -->
    		<a href="#" class="menu-toggle-btn">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
    				<i class="fa fa-bars"></i>
    			</button>
    			<!-- <a class="navbar-brand" href="/">
    				<a href="index.html"><img src="images/logo.jpg" class="logo"></a>
    			</a> -->
    		</a>
    		<!-- /.menu-toggle-btn -->
    		<!-- .responsive-menu -->
    		<div class="navi responsive-menu">
    			<ul>
    				<li class="color"><a href="{{route('index')}}">Trang chủ</a></li>
					<li class="color"><a href="{{route('products')}}">Sản phẩm</a></li>
					@yield('add_li')
    				<li class="color"><a href="#services">Hỗ trợ</a></li>
    				<li class="color"><a href="#contact">Liên hệ</a></li>
    			</ul>
    		</div> 
    		<!-- /.responsive-menu -->
    	</div> 
    </div>
    <!-- /.responsive-navigation -->
	
	<!-- #main-sidebar -->
	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<!-- .logo -->
		<div class="logo">
			<a href="#"><img src="images/logo.jpg"></a>
		</div> 
		<!-- /.logo -->
		
		<!-- .navigation -->
		<div class="navi">
			<!-- .main-menu -->
	        <ul class="main-menu">
	            <li class="color"><a href="{{route('index')}}">Trang chủ</a></li>
				<li class="color"><a href="{{route('products')}}">Sản phẩm</a></li>
				@yield('add_li')
	            <li class="color"><a href="#services">Hỗ trợ</a></li>
	            <li class="color"><a href="#contact">Liên hệ</a></li>
	            <li class="color"><a href="#" class="fa fa-facebook"></a></li>
	        </ul>
	        <!-- /.main-menu -->
		</div> 
		<!-- /.navigation -->
	</div> 
	<!-- /#main-sidebar -->
	<!-- /Navigation -->

	@yield('content')

	<!-- JavaScripts -->
	<script src="source/js/jquery-1.10.2.min.js"></script>
	<script src="source/js/jquery.singlePageNav.js"></script>
	<script src="source/js/jquery.flexslider.js"></script>
	<script src="source/js/jquery.prettyPhoto.js"></script>
	<script src="source/js/custom.js"></script>
	<script type='text/javascript' src="source/js/javascripts-custom.js"></script>
	<!-- /JavaScripts -->
</body>
</html>