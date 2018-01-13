@extends('master')
@section('content')
<div class="content">
	<div class="container">
		<div class="login-page">
		    <div class="dreamcrub">
 				<ul class="breadcrumbs">
                    <li class="home">
                       <a href="{{route('index')}}" title="Go to Home Page">TRANG CHỦ</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">ĐĂNG NHẬP</li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">QUAY LẠI</a></li>
                </ul>
                <div class="clearfix"></div>
			</div>
			<div class="account_grid">
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
					<h2>BẠN CHƯA CÓ TÀI KHOẢN?</h2>
					<a class="acount-btn" href="{{route('register')}}">TẠO TÀI KHOẢN</a>
				</div>
				<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
					<h3>ĐĂNG NHẬP</h3>
					<form>
						<div>
							<span>EMAIL<label>*</label></span>
							<input type="text" placeholder="Vui lòng nhập Email"> 
						</div>
						<div>
							<span>MẬT KHẨU<label>*</label></span>
							<input type="password" placeholder="Vui lòng nhập Email"> 
						</div>
						<a class="forgot" href="#">Quên mật khẩu?</a>
						<input type="submit" value="ĐĂNG NHẬP">
					</form>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
@endsection