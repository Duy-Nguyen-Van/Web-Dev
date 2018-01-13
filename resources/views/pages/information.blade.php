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
				<li class="home">GIỎ HÀNG &nbsp;&gt;</li>
				<li class="women">ĐẶT HÀNG</li>
			</ul>
			<ul class="previous">
				<li><a href="index.html">Trang trước</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<h2>THÔNG TIN ĐẶT HÀNG</h2><br>


		<!-- <div class="cart-gd2"> -->
		
			<div class="container">

				<div id="content-form">

					<form class="form-horizontal" action="get_information_controller.php" method="get">

						<div class="row-form">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<h5 class="h9"><b>Thông tin của bạn</b></h5>
								<!-- <hr  width="100%" align="left" color="blue"/> -->
								<!-- <div class="edit-form"> -->
									<div class="form-block">  <!--cân chỉnh tỉ lệ bootstrap.css-->
										<label for="txtName">Tên</label>
										<input type="text" class="form-control" name="name" id="txtName" placeholder="Họ và tên">	
									</div>

									<div class="form-block">
										<label for="txtPhone">Điện thoại di động</label>
										<input type="text" class="form-control" name="phone" id="txtPhone" placeholder="Nhập số điện thoại">
									</div>

									<div class="form-block">
										<label for="txtEmail">Email</label>
										<input type="text" class="form-control" name="email" id="txtEmail" placeholder="Vui lòng nhập email của bạn">
									</div>

									<div class="form-block">
										<label for="txtCity">Tỉnh/Thành phố</label>
										<input type="text" class="form-control" name="city" id="txtCity" placeholder="Nhập Tỉnh/Thành phố">
									</div>

									<div class="form-block">
										<label for="txtDistrict">Quận/Huyện</label>
										<input type="text" class="form-control" name="district" id="txtDistrict" placeholder="Nhập Quận/Huyện">        
									</div>

									<div class="form-block">
										<label for="txtCommune">Phường/Xã</label>
										<input type="text" class="form-control" name="commune" id="txtCommune" placeholder="Nhập Phường/Xã">
									</div>

									<div class="form-block">
										<label for="txtAddress">Địa chỉ nhận hàng</label>
										<input type="text" class="form-control" name="address" id="txtAddress" placeholder="Nhập địa chỉ nhận hàng (số nhà, đường,...)">
									</div>

									<div class="form-block">
										<label for="txtNote">Ghi chú</label>
										<input type="text" class="form-control" name="note" id="txtNote" placeholder="Ghi chú (nếu có)">
									</div><br>
								<!-- </div> -->
							</div>

							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="your-order">
									<div class="your-order-head"><h5><b>Đơn hàng của bạn</b></h5></div>

									<div class="your-order-body" style="padding: 0px 10px">

										<div class="your-order-item">
											<div>
												<!--  one item	-->
												<div class="media">
													<img width="25%" src="http://product.hstatic.net/1000161656/product/ssstutter-product-work-shirt-blue_master.jpg" alt="" class="pull-left">
													<div class="media-body">
														<p class="font-large">Box Tee</p>
														<span class="color-gray your-order-info">Color: Yellow</span>
														<span class="color-gray your-order-info">Size: M</span>
														<span class="color-gray your-order-info">Qty: 1</span>
													</div>
												</div>
												<!-- end one item -->
											</div>
											<div class="clearfix"></div>
										</div>

										<div class="your-order-item">
											<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
											<div class="pull-right"><h5 class="color-black">270.000đ</h5></div>
											<div class="clearfix"></div>
										</div>

									</div>


									<div class="your-order-head"><h5><b>Hình thức thanh toán</b></h5></div>

									<div class="your-order-body">
										<ul class="payment_methods methods">
											<li class="payment_method_bacs">
												<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
												<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
											</li>

											<li class="payment_method_cheque">
												<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
												<label for="payment_method_cheque">Chuyển khoản </label>
												<div class="payment_box payment_method_cheque" style="display: none;">
													Thông tin tài khoản
												</div>						
											</li>
										</ul>
									</div>


									<div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>

								</div> <!-- .your-order -->
							</div>
						</div>

					</form>
				</div> <!-- #content -->
			</div> <!-- .container -->

			<!-- include js files -->
			<script src="information/js/jquery.js"></script>
			<script src="information/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
			<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
			<script src="information/vendors/bxslider/jquery.bxslider.min.js"></script>
			<script src="information/vendors/colorbox/jquery.colorbox-min.js"></script>
			<script src="information/vendors/animo/Animo.js"></script>
			<script src="information/vendors/dug/dug.js"></script>
			<script src="information/js/scripts.min.js"></script>
			<!--customjs-->
			<script type="text/javascript">
				$(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".main-menu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
            	$(this).closest("li").addClass("active");
            	$(this).parents('li').addClass('parent-active');
            }
        });
    });   
			</script>

			<script>
	jQuery(document).ready(function($) {
		'use strict';

		// color box

		//color
		jQuery('#style-selector').animate({
			left: '-213px'
		});

		jQuery('#style-selector a.close').click(function(e){
			e.preventDefault();
			var div = jQuery('#style-selector');
			if (div.css('left') === '-213px') {
				jQuery('#style-selector').animate({
					left: '0'
				});
				jQuery(this).removeClass('icon-angle-left');
				jQuery(this).addClass('icon-angle-right');
			} else {
				jQuery('#style-selector').animate({
					left: '-213px'
				});
				jQuery(this).removeClass('icon-angle-right');
				jQuery(this).addClass('icon-angle-left');
			}
		});
	});
			</script>

		<!-- </div> -->
	</div>
</div>
@endsection