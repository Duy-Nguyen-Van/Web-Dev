@extends('master')
@section('content')
<div class="container">
   <div class="products-page">
		<div class="products">	
		</div>
		<div class="new-product">
			<div class="col-md-5 zoom-grid">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="images/si.jpg">
							<div class="thumb-image"> <img src="images/si.jpg" data-imagezoom="true" class="img-responsive" alt="" /> </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-7 dress-info">
				<div class="dress-name">
					<h3>BOX TEA</h3>
					<span>150.000Đ</span>
					<div class="clearfix"></div>
				</div>
				<div class="span span1">
					<p class="left">XUẤT XỨ</p>
					<p class="right">Việt Nam</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">MÀU</p>
					<p class="right">White</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span4">
					<p class="left">SIZE</p>
					<p class="right"><span class="selection-box"><select class="domains valid" name="domains">
					<option>S</option>
					<option>M</option>
					<option>L</option>
					<option>XL</option>
					</select></span></p>
					<div class="clearfix"></div>
				</div>
				<div class="purchase">
					<a href="#">ĐẶT HÀNG</a>
					<div class="social-icons">
						<ul>
							<li><a class="facebook1" href="#"></a></li>
							<li><a class="twitter1" href="#"></a></li>
							<li><a class="googleplus1" href="#"></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<script src="js/imagezoom.js"></script>
				<!-- FlexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						});
					});
				</script>
			</div>
		</div>
	</div>
</div>
@endsection