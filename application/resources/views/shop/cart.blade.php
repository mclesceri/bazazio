@extends('layout.default')
@section('content')

<section class="home_page_feed">  
 
        <div class="cart">
    		@foreach ($cart->items as $item)
            <ul class="cart-row">
                <li class="sku">{{ $item->sku }}</li>
                <li class="name"><a href="{{ $item->shopUrl }}">{{ $item->name }}</a></li>
                <li class="price">{{ $item->price }}</li>
                <li class="price">{{ $item->displayPrice }}</li>
                <li class="tax">{{ $item->tax }}</li>
                <li class="qty">{{ $item->quantity }}</li>
                <li class="shipping">{{ $item->shipping }}</li>
            </ul>
            @endforeach
        </div>
        <table>

    <tbody>
        <tr>
            <td>Subtotal:</td>
            <td>{{ $cart->displayTotalPrice }}</td>
            <td>{{ $cart->totalPrice }}</td>
        </tr>
        <tr>
            <td>Shipping:</td>
            <td>{{ $cart->displayTotalShipping }}</td>
        </tr>
        <tr>
            <td>Tax:</td>
            <td>{{ $cart->displayTotalTax }}</td>
        </tr>
    </tbody>

    <tfoot>
        <tr>
            <th>Total:</th>
            <th>{{ $cart->displayTotal }}</th>
            <th>{{ $cart->total }}</th>
        </tr>
    </tfoot>

</table>

{!! Form::open(['action' => 'ProductController@showCheckout', 'class' => 'form-product'] ) !!}
{!! Form::submit('Checkout') !!}
{!! Form::close() !!}
 </section>
@stop
