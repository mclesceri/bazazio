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
{!! Form::open(['action' => 'ProductController@doCheckout', 'class' => 'form-product'] ) !!}
<div class="detail">
<div class="billing">
	<h2>Billing Detail</h2>
   
    <div class="inputbox">
	{!! Form::text('billing_firstnanme',null,['placeholder'=>'First Name','id'=>'billing_firstname']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_lastname',null,['placeholder'=>'Last Name','id'=>'billing_lastname']) !!}
    </div>
    <div class="inputbox">
	{!! Form::email('billing_email',null,['placeholder'=>'Email Address','id'=>'billing_email']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_address1',null,['placeholder'=>'Address 1','id'=>'billing_address1']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_address2',null,['placeholder'=>'Address 2','id'=>'billing_address2']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_city',null,['placeholder'=>'City','id'=>'billing_city']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_state',null,['placeholder'=>'State','id'=>'billing_state']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_zipcode',null,['placeholder'=>'Zip','id'=>'billing_zipcode']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_country',null,['placeholder'=>'Country','id'=>'billing_country']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('billing_phone',null,['placeholder'=>'Phone Number','id'=>'billing_phone']) !!}
    </div>
</div>
<div class="sameas">
 {!! Form::checkbox('sameas','1',0,['id'=>'sameas','oncheck'=>'billingshipping()']) !!} Same as Billing
</div>
<div class="shipping">
	<h2>Shipping Detail</h2>
    <div class="inputbox">
	{!! Form::text('shipping_firstnanme',null,['placeholder'=>'First Name','id'=>'shipping_firstname']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_lastname',null,['placeholder'=>'Last Name','id'=>'shipping_lastname']) !!}
    </div>
    <div class="inputbox">
	{!! Form::email('shipping_email',null,['placeholder'=>'Email Address','id'=>'shipping_email']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_address1',null,['placeholder'=>'Address 1','id'=>'shipping_address1']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_address2',null,['placeholder'=>'Address 2','id'=>'shipping_address2']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_city',null,['placeholder'=>'City','id'=>'shipping_city']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_state',null,['placeholder'=>'State','id'=>'shipping_state']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_zipcode',null,['placeholder'=>'Zip','id'=>'shipping_zipcode']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_country',null,['placeholder'=>'Country','id'=>'shipping_country']) !!}
    </div>
    <div class="inputbox">
	{!! Form::text('shipping_phone',null,['placeholder'=>'Phone Number','id'=>'shipping_phone']) !!}
    </div>
</div>
<div class="payment">
	<div class="inputbox">
	{!! Form::text('shipping_phone',null,['placeholder'=>'Phone Number','id'=>'shipping_phone']) !!}
    </div>

</div>

</div>
{!! Form::submit('Proceed') !!}
{!! Form::close() !!}
 </section>
<script language="javascript" type="application/javascript">
$(document).ready(function(){
 var fieldarray = ["firstname", "lastname", "email","address1", "address2", "city","state","zipcode","country","phone"];
 $('#sameas').change(function(){
	 if ($(this).prop("checked")) {
      for(var i =0; i< fieldarray.length;i++)
	  {
		  var billingfield = '#billing_'+fieldarray[i];
		  var fieldval = $(billingfield).val();
		  var shippingfield = '#shipping_'+fieldarray[i];
		  $(shippingfield).val(fieldval);
	  }
    }
	else
	{
		for(var i =0; i< fieldarray.length;i++)
	  	{
			var shippingfield = '#shipping_'+fieldarray[i];
		  	$(shippingfield).val("");
		}
	}
     
	});
});
</script>
@stop
