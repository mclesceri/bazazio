<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Auth;
use Shop;
use Input;
use Session;
use Redirect;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;

class ProductController extends CrudController{

    public function all($entity){
        parent::all($entity); 


			$this->filter = \DataFilter::source(new \App\Product);
			$this->filter->add('name', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('sku', 'SKU');
			$this->grid->add('price', 'Price');
			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        
	
		$this->edit = \DataEdit::source(new \App\Product());

		$this->edit->label('Edit Product');

		$this->edit->add('name', 'Title', 'text')->rule('required');
		
		$this->edit->add('sku', 'SKU', 'text');
		
		$this->edit->add('price', 'Price', 'number');
		
		$this->edit->add('image', 'Image', 'image')->move('images/products/')->preview(80,80);
		
		$this->edit->add('tax', 'Tax', 'number');
		
		$this->edit->hidden('author', 'null')->updateValue(Auth::user()->id); 
		
		$this->edit->hidden('slug', 'null')->updateValue(Auth::user()->id);
       
        return $this->returnEditView();
    }
	
	function getProduct($id)
	{
		
		$product = Product::find($id);
		return view('shop.index',['product' => $product]);
	}
	
	function addItem()
	{
		$productData =  Input::all();
		if(Auth::check()){
		$cart = Cart::current();
		$product = Product::find($productData['prodid']);
		$cart->add(Product::find($productData['prodid']), $productData['qty']);
		
		return Redirect::to('/product/'.$productData['prodid'])->with('message', 'Product Added Cart');
		}
		else
		{
			return Redirect::to('/login');
		}
	}
	
	function showCart()
	{
		$cart = Cart::current();
		return view('shop.cart',['cart' => $cart]);
	}
	
	function showCheckout()
	{
		$cart = Cart::current();
		return view('shop.checkout',['cart' => $cart]);
	}
	
	function doCheckout()
	{
		Shop::setGateway('paypalExpress');
		/*Shop::gateway()->setCreditCard(
		  $cartType   = 'visa',
		  $cardNumber = '4111111111111111',
		  $month      = '1',
		  $year       = '2019',
		  $cvv        = '123',
		  $firstname  = 'John',
		  $lastname   = 'Doe'
		);*/
		// (2) - Call checkout / OPTIONAL
		// You can call this to keep a standard flow
		// Although this step for this gateway is not needed.
		//$result = Shop::checkout();
		// (3) - Create order
		$order = Shop::placeOrder();
		
		// (4) - Review order and redirect to payment
		if ($order->isPending) {
		
		  // PayPal URL to redirect to proceed with payment
		  $approvalUrl = Shop::gateway()->getApprovalUrl();
		
		  // Redirect to url
		  return redirect($approvalUrl);
		}
	}
}
