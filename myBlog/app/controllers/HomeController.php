<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('template_blog');
	}

	public function showEdit()
	{
		return View::make('edit')->with('id',Input::get('id'));
	}

	public function setEdit()
	{
		$now = date('Y-m-d H:i:s');
		$publication = Publication::find(Input::get('id'));
		foreach(Comments::all() as $comment) {
			if($comment->title == $publication->title) {
				$comment -> title = Input::get('title');
				$comment -> save();
			}
		}
		$publication -> updated_at = $now;
		$publication -> title = Input::get('title');
		$publication -> author = Input::get('author');
		$publication -> text = Input::get('text');
		$publication -> save();
		return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
	}

	public function showEditComment()
	{
		return View::make('editComment')->with('id',Input::get('id'));
	}

	public function setEditComment()
	{
		$now = date('Y-m-d H:i:s');
		$comment = Comments::find(Input::get('id'));
		$comment -> updated_at = $now;
		$comment -> author = Input::get('author');
		$comment -> text = Input::get('text');
		$comment -> save();
		return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
	}



}
