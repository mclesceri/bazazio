@extends('layout.default')
@section('content')

<section class="home_page_feed"> 
	
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
 	<div class="product">
    	<h2 class="prod-title">{!! $product->name !!}</h2>
        <div class="prod-detail">
        	<div class="prod-img">
            	<img src="{!! URL::asset('images/products/') !!}/{!! $product->image !!}" width="150">
            </div>
            <div class="prod-data">
            	<div class="pride">{!!  Shop::format($product->price) !!}</div>
                {!! Form::open(['action' => 'ProductController@addItem', 'class' => 'form-product'] ) !!}
                <div class="prod-qty">
                	{!! Form::number('qty',null) !!}
                </div>
                <div class="addtocart">{!! Form::submit('Add to Cart') !!}</div>
                {!! Form::hidden('prodid',$product->id) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
 </section>
@stop
