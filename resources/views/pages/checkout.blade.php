@extends('master')
@section('content')
<div class="cart-items">
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
					<a href="index.html" title="Go to Home Page">TRANG CHỦ</a>&nbsp;
					<span>&gt;</span>
				</li>
				<li class="women">GIỎ HÀNG</li>
			</ul>
			<ul class="previous">
				<li><a href="index.html">Trở về trang vừa truy cập</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<h2>GIỎ HÀNG CỦA TÔI (3)</h2>
		<div class="cart-gd">
			<script>
				$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
					});	  
				});
			</script>
			<div class="cart-header">
				<div class="close1"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<img src="images/l1.jpg" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
						<div class="delivery">
							<p>Service Charges : $10.00</p>
							<span>Delivered in 1-1:30 hours</span>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<script>
				$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
					});	  
				});
			</script>
			<div class="cart-header2">
				<div class="close2"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<img src="images/l2.jpg" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
						<div class="delivery">
							<p>Service Charges : $10.00</p>
							<span>Delivered in 3-3:30 hours</span>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<script>
				$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header3').fadeOut('slow', function(c){
							$('.cart-header3').remove();
						});
					});	  
				});
			</script>
			<div class="cart-header3">
				<div class="close3"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<img src="images/l3.jpg" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
						<div class="delivery">
							<p>Service Charges : $10.00</p>
							<span>Delivered On Tomorrow</span>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection