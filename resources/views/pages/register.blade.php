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
				<li><a href="index.html">Trở về trang vừa truy cập</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<h2>ĐĂNG KÍ</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					<p>Welcome, please enter the following details to continue.</p>
					<p>If you have previously registered with us, <a href="#">click here</a></p>
					<form>
						<ul>
							<li class="text-info">First Name: </li>
							<li><input type="text" value=""></li>
						</ul>
						<ul>
							<li class="text-info">Last Name: </li>
							<li><input type="text" value=""></li>
						</ul>				 
						<ul>
							<li class="text-info">Email: </li>
							<li><input type="text" value=""></li>
						</ul>
						<ul>
							<li class="text-info">Password: </li>
							<li><input type="password" value=""></li>
						</ul>
						<ul>
							<li class="text-info">Re-enter Password:</li>
							<li><input type="password" value=""></li>
						</ul>
						<ul>
							<li class="text-info">Mobile Number:</li>
							<li><input type="text" value=""></li>
						</ul>						
						<input type="submit" value="REGISTER NOW">
						<p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
					</form>
				</div>
			</div>
			<div class="reg-right">
				<h3>Completely Free Account</h3>
				<div class="strip"></div>
				<p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				<h3 class="lorem">Lorem ipsum dolor.</h3>
				<div class="strip"></div>
				<p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection