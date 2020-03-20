<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model {

    protected $table = 'banners';
	
	public static function getSize()
	{
		$bannersize  = array('234X60' => '234 X 60','468X60' => '468 X 60','120X60' => '120 X 60','60X60' => '60 X 60');
		return $bannersize;
	}
	
	public static function getSpot()
	{
		$bannerspot  = array('top' => 'Top','bottom' => 'Bottom','left' => 'Left','right' => 'Right');
		return $bannerspot;
	}
	
	public static function getBanners($position)
	{
		if($position == 'all')
		{
			
			$banners = Banner::all();
			return $banners;
		}
		else
		{
			$banners = Banner::where('adspot','=',$position)->orderBy('order', 'asc')->get();
			return $banners;
		}
		
	}

}
