@extends('master')

@section('title', '| Products')

@section('content')

	<div class="container">
		<div class="col-md-10">
			<h1>All Products</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('products.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing" style="margin-top: 20px;">Create New Product</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Benefit</th>
					<th>Price</th>
				</thead>

				<tbody>
					
					@foreach ($products as $product)
						
						<tr>
							<td>{{ $product->id }}</td>
							<th>{{ $product->name }}</th>
							<td>{{ $product->description }}</td>
							<td>{{ $product->benefit }}</td>
							<td>{{ $product->price }}</td>

							<td>{{ date('M j, Y', strtotime($product->created_at)) }}</td>
							<td><a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">View</a> <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $products->links(); !!}
			</div>
		</div>
	</div>

@stop