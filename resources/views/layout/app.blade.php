<!DOCTYPE html>
<html>
<head>
    <!-- Title -->
    <link rel="icon" href="{{ asset('images/title_logo.ico') }}"/>
	<!-- <title>Tất cả sản phẩm</title> -->
	<!-- /Title -->

	<!-- Meta -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
    <!-- /Meta -->

	<!-- Font -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-google.css') }}" rel="stylesheet">
	<!-- /Font -->

	<!-- Style -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/misc.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<!-- /Style -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<!-- Navigation -->
	<!-- .responsive-navigation -->
    <div class="responsive-navigation visible-sm visible-xs">
    	<div class="container">
    		<div class="attr">
    			<ul>
    				<img src="{{ asset('images/rsz_search-icon.png') }}"/>
    				<img src="{{ asset('images/rsz_cart-icon.png') }}"/>
    				<span class="cart-total-responsive items-num count">0</span>
    			</ul>
    		</div>
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
    				<li class="color"><a href="index.html">Trang chủ</a></li>
    				<li class="color"><a href="product.html">Sản phẩm</a></li>
    				<li class="color"><a href="t-shirt.html">Áo thun</a></li>
    				<li class="color"><a href="shirt.html">Sơ mi</a></li>
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
			<a href="index.html"><img src="{{ asset('images/logo.jpg') }}"/></a>
		</div> 
		<!-- /.logo -->
		
		<!-- .navigation -->
		<div class="navi">
			<!-- .main-menu -->
	        <ul class="main-menu">
	            <li class="color"><a href="index.html">Trang chủ</a></li>
	            <li class="color"><a href="product.html">Sản phẩm</a></li>
	            <li class="color"><a href="t-shirt.html">Áo thun</a></li>
	            <li class="color"><a href="shirt.html">Sơ mi</a></li>
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

<!-- Content -->
	<!-- #main-content -->
	<div id="main-content">
		<!-- .header-right -->
		<div class="menu-search header-right hidden-xs hidden-sm">
			<div class="row">
				<ul>
					<img src="{{ asset('images/rsz_search-icon.png') }}"/>
					<img src="{{ asset('images/rsz_cart-icon.png' ) }}"/>
					<span class="cart-total items-num count">0</span>
				</ul>
			</div>
		</div>
		<!-- /.header-right -->

		<div class="container-fluid">
			<!-- .product-grid -->
			<div class="product product-grid">
				<!-- .title -->
				@yield('content')
			</div>
			<!-- /.product-grid -->
		</div>

		<!-- .footer -->
		<div class="footer">
			<!-- #toTop -->
			<div id="toTop">
				<img src="{{ asset('images/rsz_totop.png') }}" alt=" " />
			</div>
			<!-- /#toTop -->
			<div class="container-footer">
				<div class="responsive-navigation visible-sm visible-xs">
					<div class="nextpage-responsive">
						<div class="col-md-12">
							<!-- .page-node -->
							<span class="page-node current">1</span>
							<a class="page-node" href="product-2.html">2</a>
							<a class="page-node" href="#">3</a>
							<!-- /.page-node -->
							<a class="next fa fa-angle-right" href="#">
								<span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="nextpage hidden-xs hidden-sm">
					<div class="col-md-12">
						<!-- .page-node -->
						<span class="page-node current">1</span>
						<a class="page-node" href="product-2.html">2</a>
                       	<a class="page-node" href="#">3</a>
                       	<!-- /.page-node -->
                       	<a class="next fa fa-angle-right" href="#">
                       		<span></span>
                       	</a>
					</div>
				</div>
			</div>
		</div> 
		<!-- /.footer -->
	</div> 
	<!-- /#main-content -->
<!-- /Content -->

<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.singlePageNav.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	<script type='text/javascript' src="js/javascripts-custom.js"></script>
<!-- /JavaScripts -->

</body>
</html>