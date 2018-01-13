<!-- header-section-starts -->
<div class="header">
	<div class="header-top-strip">
		<div class="container">
			<div class="header-top-left">
				<ul>
					<li><a href="{{route('account')}}"><span class="glyphicon glyphicon-user"> </span>ĐĂNG NHẬP</a></li>
					<li><a href="{{route('register')}}"><span class="glyphicon glyphicon-lock"> </span>ĐĂNG KÝ</a></li>			
				</ul>
			</div>
			<div class="header-right">
					<div class="cart box_1">
						<a href="{{route('checkout')}}">
							<h3> <span class="simpleCart_total"> VND 0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="source/images/bag.png" alt=""></h3>
						</a>	
						<p><a href="javascript:;" class="simpleCart_empty">Làm rỗng</a></p>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header-section-ends -->

<div class="banner-top">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		        </button>
				<div class="logo">
					{{-- <h1><a href="{{route('index')}}"><span>M &amp; A</span> Shop</a></h1> --}}
					<img src="images/rsz_logo1.png">
				</div>
		    </div>
	    	<!--/.navbar-header-->
	
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
					<li><a href="{{route('index')}}">TRANG CHỦ</a></li>
					<li><a href="{{route('products')}}">ÁO THUN</a></li>
					<li><a href="{{route('products')}}">ÁO SƠ MI</a></li>
					<li><a href="{{route('contact')}}">LIÊN HỆ</a></li>
		        </ul>
		    </div>
		    <!--/.navbar-collapse-->
		</nav>
		<!--/.navbar-->
	</div>
</div>