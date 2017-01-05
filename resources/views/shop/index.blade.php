@extends('layouts.master')



@section('content')
	<div class="row">
			@foreach($products as $product)	
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="{{$product->imagepath}}" alt="..." class="img-responsive" width="100" height="100">
					<div class="caption">
						<b>{{$product->title}}</b>
					</div>
					<p class="description">
						{{$product->description}}
					</p>
					<div class="clearfix" class="row">
						<div class="pull-left price col-md-4">${{$product->price}}</div>
						<div class="col-md-offset-2 col-md-4">
							<a href="{{ route('product.addToCart',['id'=>$product->id]) }}" class="btn btn-success full-right" role="button">
								Add To Cart
							</a>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection