@extends('master')
@section('content')
<div class="registration-form">
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
					<a href="index.html" title="Go to Home Page">TRANG CHỦ</a>&nbsp;
					<span>&gt;</span>
				</li>
				<li class="women">ĐĂNG KÍ</li>
			</ul>
			<ul class="previous">
				<li><a href="index.html">QUAY LẠI</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					<h2>ĐĂNG KÍ</h2>
					<form>
						<ul>
							<li class="text-info">Họ và tên </li>
							<li><input type="text" value="" placeholder="Vui lòng nhập họ và tên"></li>
						</ul>			 
						<ul>
							<li class="text-info">Email: </li>
							<li><input type="text" value="" placeholder="Vui lòng nhập Email"></li>
						</ul>
						<ul>
							<li class="text-info">Mật khẩu: </li>
							<li><input type="password" value="" placeholder="Vui lòng nhập mật khẩu"></li>
						</ul>
						<ul>
							<li class="text-info">Nhập lại mật khẩu:</li>
							<li><input type="password" value="" placeholder="Vui lòng nhập lại mật khẩu"></li>
						</ul>
						<p class="click">*Tôi đã đọc và đồng ý với <a href="#">chính sách </a> của M &amp; A Shop</p>
						<br> 			
						<input type="submit" value="ĐĂNG KÝ">
					</form>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection