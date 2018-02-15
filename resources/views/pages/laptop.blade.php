@extends('layouts.app')

@section('custom_css')

<style>

	.spacing {
		margin-left: 10%;
		margin-top: 5%;
	}

</style>

@endsection

@section('content')


<div class="spacing">

	<h1>{{ $phone->name }}</h1>
	<img src="/storage/laptops/{{ $laptop->m_photo_path }}" />

</div>

@foreach($laptop_images as $image)

	<img src="/storage/laptops/{{ $image->path }}" />

@endforeach

<a href="/cart/add/{{ $all_products_id }}">Add to cart</a>

@endsection
