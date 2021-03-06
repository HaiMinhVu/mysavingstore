@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="index.html">Home</a> / <span>Search</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
					@foreach($menu as $row_menu)
						<li><a href="category/{{$row_menu->id}}">{{$row_menu->name}}</a></li>
					@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>Search Result</h4>
						<div class="beta-products-details">
							@if(count($product) > 1)
								<p class="pull-left">There are {{count($product)}} products match "{{$tukhoa}}"</p>
							@else
								<p class="pull-left">There is {{count($product)}} product match "{{$tukhoa}}"</p>
							@endif
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($product as $pro)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product/{{$pro->id}}"><img src="upload/product/{{$pro->image}}" alt="{{$pro->name}}"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$pro->name}}</p>
										@if($pro->promotion_price == 0)
											<p class="single-item-price"><span>${{$pro->unit_price}}</span></p>
										@endif
										@if($pro->promotion_price > 0)
											<p class="single-item-price">
												<span class="flash-del">${{$pro->unit_price}}</span>
												<span class="flash-sale">${{$pro->promotion_price}}</span>
											</p>
										@endif
									</div>
									<!-- <div class="single-item-caption">
										<a class="add-to-cart pull-left" href="addcart/{{$pro->id}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product/{{$pro->id}}">Chi Tiết<i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div> -->
								</div>
							</div>
							@endforeach
						</div>

					</div>
				</div>
			</div>


		</div>
	</div>
</div>
@endsection