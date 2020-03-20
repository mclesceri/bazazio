<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Game;
use App\User;
use Input;
use Auth;
use App\Post;
use Validator;
use Session;
use Redirect;
use Storage;
use File;
use Mail;

use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use \Chumper\Zipper\Zipper;


class LivestreamController extends CrudController{

    public function all($entity=''){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new \App\Category);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('code', 'Code');
			$this->addStylesToGrid();

        */
                 
        return $this->returnView();
    }
    
    public function  edit($entity=''){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');
		
			$this->edit->add('code', 'Code', 'text')->rule('required');


        */
       
        return $this->returnEditView();
    }   
	
	public function makeInquiry()
	{
		return view('livestream.inquiry');
	}
	
	
	public function sendInquiry()
	{
		$inquiryData = Input::all();
		Mail::send('emails.inquiry', $inquiryData, function ($message) {
			$message->from($inquiryData['email'], $inquiryData['name']);
		
			$message->to('dev1@brodywebdesign.com')->cc('vishal@brodywebdesign.com');
		});
		$game = new Game;
		
	}
}
