@extends('master')
@section('title')
<!-- Title -->
<link rel="icon" href="source/images/title_logo.ico">
<title>Áo thun</title>
<!-- /Title -->
@endsection

@section('add_li')
<li class="color"><a href="{{route('t-shirt')}}">Áo thun</a></li>
<li class="color"><a href="{{route('shirt')}}">Sơ mi</a></li>
@endsection

@section('attr')
<div class="attr">
	<ul>
		<img src="source/images/rsz_search-icon.png">
		<img src="source/images/rsz_cart-icon.png">
		<span class="cart-total-responsive items-num count">0</span>
	</ul>
</div>
@endsection

@section('content')
<!-- Content -->
	<!-- #main-content -->
	<div id="main-content">
		<!-- .header-right -->
		<div class="menu-search header-right hidden-xs hidden-sm">
			<div class="row">
				<ul>
					<img src="source/images/rsz_search-icon.png">
					<img src="source/images/rsz_cart-icon.png">
					<span class="cart-total items-num count">0</span>
				</ul>
			</div>
		</div>
		<!-- /.header-right -->

		<div class="container-fluid">
			<!-- .product-grid -->
			<div class="product product-grid">
				<!-- .title -->
				<div class="title">
					<h1>Áo thun</h1>
				</div>
				<!-- /.title -->
				<div class"row">
					@foreach($a as $item)
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="new-product">
							<!-- .product-images -->
							<div class="product-images">
								<img src="{{$item->image}}" class="img-responsive"/>
							</div>
							<!-- /.product-images -->
							<h4>{{$item->name}}</h4>
							<p>{{$item->price}}</p>
						</div>
					</div>
					@endforeach
				</div>
				{{$a->links()}}
			</div>
			<!-- /.product-grid -->
			</div>
		</div>
		<!-- .footer -->
		<div class="footer">
			<!-- #toTop -->
			<div id="toTop">
				<img src="source/images/rsz_totop.png" alt=" " />
			</div>
			<!-- /#toTop -->
		</div> 
		<!-- /.footer -->
	</div> 
	<!-- /#main-content -->
<!-- /Content -->
@endsection