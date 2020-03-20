<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Amsgames\LaravelShop\Traits\ShopUserTrait;

class Product extends Model {


	 use ShopUserTrait;
	 
	 /**
     * Name of the route to generate the item url.
     *
     * @var string
     */
    protected $itemRouteName = 'product';

    /**
     * Name of the attributes to be included in the route params.
     *
     * @var string
     */
    protected $itemRouteParams = ['id'];
	
	 /**
     * Custom field name to define the item's name.
     * @var string
     */
    protected $itemName = 'name';

    protected $table = 'products';

}
