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

use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use \Chumper\Zipper\Zipper;


class GameController extends CrudController{

    public function all($entity){
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
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');
		
			$this->edit->add('code', 'Code', 'text')->rule('required');


        */
       
        return $this->returnEditView();
    }   
	
	public function viewGames()
	{
		$games = Game::all();
		$game = Game::all() -> last();
		
		return view('games.index',['maingame' => $game,'games'=>$games]);
	}
	
	public function viewSingleGames($id)
	{
		$games = Game::all();
		$game = Game::find($id);
		return view('games.index',['maingame' => $game,'games'=>$games]);
	}
	
	public function addGames()
	{
		if(Auth::check()){
			return view('games.add');
		}
		else
		{
			return Redirect::to('/login');
		}
	}
	
	public function uploadGame()
	{
		$gameData = Input::all();
		$game = new Game;
		
		if(Input::hasFile('postpic')) {
      		//upload an image to the /img/tmp directory and return the filepath.
			$file = Input::file('postpic');
			$directory = 'games/'.str_replace(" ","-",$gameData['title']);
			$destinationPath = 'application/storage/'.$directory;
			
			$newfilename = time() . '-' . $file->getClientOriginalName();
			$file = $file->move($destinationPath, $newfilename);
			
			//$zipper = new \Chumper\Zipper\Zipper;
			$game->image = $destinationPath."/".$newfilename;
		}
		
		if(Input::hasFile('gamedata')) {
			$gamefile = Input::file('gamedata');
			$gamefile->move($destinationPath, $gamefile->getClientOriginalName());
			
			//$gamedir = pathinfo($gamefile->getClientOriginalName(), PATHINFO_FILENAME );
			$zipper = new \Chumper\Zipper\Zipper;
			
			$zipper->make($destinationPath."/".$gamefile->getClientOriginalName())->extractTo($destinationPath);
			File::delete($destinationPath."/".$gamefile->getClientOriginalName());
		}
			$game->title = $gameData['title'];
			$game->author = Auth::user()->id;
			$game->path = $destinationPath."/".pathinfo($gamefile->getClientOriginalName(), PATHINFO_FILENAME );
			$game->gametype = $gameData['gametype'];
			$game->save();
		
	}
}
