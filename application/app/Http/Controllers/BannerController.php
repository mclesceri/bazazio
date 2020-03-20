<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class BannerController extends CrudController{

    public function all($entity){
        parent::all($entity); 


			$this->filter = \DataFilter::source(new \App\Banner);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'title');
			$this->grid->add('type', 'Size');
			$this->grid->add('adspot', 'Spot');
			
			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

		$this->edit = \DataEdit::source(new \App\Banner());

		$this->edit->label('Edit Banner');
		
		$helpMessage = trans('rapyd::rapyd.links_help');

		$this->edit->add('title', 'Title', 'text');
		
		$this->edit->add('type','Banner Type','select')->options(\App\Banner::getSize());
		
		$this->edit->add('path', 'Banner', 'image')->move('banners/')->preview(80,80);
		
		$this->edit->add('adspot','Banner Spot','select')->options(\App\Banner::getSpot());
		
		$this->edit->add('bannerlink', 'Banner Link', 'text');
		
		$this->edit->add('order','Banner order','number');
		
		$this->addHelperMessage($helpMessage);
       
        return $this->returnEditView();
    }    
}
