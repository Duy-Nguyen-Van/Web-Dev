@extends('master')
@section('content')
<title>Giỏ hàng</title>
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
				<li><a href="{{redirect()->getUrlGenerator()->previous()}}">QUAY LẠI</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<h2>GIỎ HÀNG</h2>
		<div class="cart-gd">
			<script>$(document).ready(function(c) {
				$('.close1').on('click', function(c){
					$('.cart-header').fadeOut('slow', function(c){
						$('.cart-header').remove();
					});
				});	  
			});
		</script>
		@foreach($content as $cart_detail)
		<div class="cart-header">
		<a href="{{route('delete',['id'=>$cart_detail->rowId])}}"><div class="close1"></div></a>
			<div class="cart-sec simpleCart_shelfItem">
				<div class="cart-item cyc">
					<img src="{{$cart_detail->options->img}}" class="img-responsive" alt="">
				</div>			
				<div class="cart-item-info">
					<h3><a href="#"> {{$cart_detail->name}} </a></h3>
					<ul class="qty">
						<li><p>Giá: {{$cart_detail->price}} VNĐ</p></li>
						<li><p>Số lượng</p></li><li><input class="form-control text-center" value="{{$cart_detail->qty}}" type="number"></li>
					</ul>
					<div class="delivery">				
						<p>Thành tiền : {{$cart_detail->qty*$cart_detail->price}} VND</p>
						<div class="clearfix"></div>
					</div>	
				</div>			
				<div class="clearfix"></div>
			</div>		
		</div>
		@endforeach
		<hr>
		<div class="delivery" style="margin-left: 24%">				
			<p>Tổng tiền : {{$total}} VND</p>
			<div class="clearfix"></div>
		</div>	
		<div class="clearfix"></div>
		<div class="col-md-3 col-md-offset-3" style="margin-top: 20px;">
			<a href="{{route('index')}}" class="btn btn-warning">Tiếp tục mua hàng</a>
		</div>
 		<div class="col-md-3 col-md-offset-3" style="margin-top: 20px;">
			<a href="{{route('information')}}" class="btn btn-success">Đặt hàng</a>
 		</div>
	</div>
</div>
<!-- //checkout -->	
@endsection