@extends('master')
@section('content')
<!-- checkout -->
	<div class="cart-items">
		<div class="container">
			<div class="dreamcrub">
				<ul class="breadcrumbs">
					<li class="home">
						<a href="{{route('index')}}" title="Go to Home Page">TRANG CHỦ</a>&nbsp;
						<span>&gt;</span>
					</li>
					<li class="women">
						GIỎ HÀNG
					</li>
				</ul>
				<ul class="previous">
					<li><a href="{{route('index')}}">QUAY LẠI</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<h2>GIỎ HÀNG (2 sản phẩm)</h2>
			<div class="cart-gd">
				<script>$(document).ready(function(c) {
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
						<h3><a href="#"> Box Tee </a></h3>
						<ul class="qty">
							<li><p>Giá: 150.000đ</p></li>
							<li><p>Số lượng</p></li><li><input class="form-control text-center" value="1" type="number"></li>
						</ul>
						<div class="delivery">
							<p>Thành tiền : $10.00</p>
							<div class="clea	rfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>

				</div>
			</div>
			<script>$(document).ready(function(c) {
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
					<h3><a href="#"> Bae Striped Shirt </a></h3>
					<ul class="qty">
						<li><p>Giá: 400.000đ</p></li>
						<li><p>Số lượng</p></li><li><input class="form-control text-center" value="1" type="number"></li>
					</ul>
					<div class="delivery">
						<p>Thành tiền</p>
						<div class="clearfix"></div>
					</div>	
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<script>$(document).ready(function(c) {
			$('.close3').on('click', function(c){
				$('.cart-header3').fadeOut('slow', function(c){
					$('.cart-header3').remove();
				});
			});	  
		});
	</script>
</div>
<!-- 		<a href="products.html" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
		<a href="#" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
 -->
		<div class="col-md-3 col-md-offset-3">
			<a href="{{route('products')}}" class="btn btn-warning">Tiếp tục mua hàng</a>
		</div>
 		<div class="col-md-3 col-md-offset-3">
 			<a href="{{route('information')}}" class="btn btn-success">Đặt hàng</a>
 		</div>
</div>
</div>
	<br>

<!-- //checkout -->	
@endsection