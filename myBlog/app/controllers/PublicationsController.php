<?php

class PublicationsController extends BaseController {
	public function getPublications() {
		return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
	}

	public function deletePublications() {
		$publication = Publication::find(Input::get('id'));
		foreach(Comments::all() as $comment) {
			if($comment->title == $publication->title) {
				$comment -> delete();
			}
		}
		$publication -> delete();
		return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
	}
	
	public function editPublications() {
		return View::make('edit_publication')->with('id',Input::get('id'));
	}

	public function putPublications() {
		if(empty(Input::get('title'))) {
			return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
		}
		else if(!empty(Input::get('title')) && empty(Input::get('author')) && !empty(Input::get('text')) ) {
			$titleTmp = Input::get('title');$idTmp=0;$changeId=0;
			foreach(Publication::all() as $publi) {
				$idTmp=$publi->id;
				if($publi->title == $titleTmp) {
					$changeId=1;
				}
			}
			if($changeId==1)
				$titleTmp="$titleTmp" . "(" . "$idTmp" . ")";
			$now = date('Y-m-d H:i:s');
			DB::table('publication')->insert(array('created_at' => $now,'updated_at' => $now,'title' => $titleTmp, 'author' => 'Anonymous', 'text' => Input::get('text')));
			return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
		}
		else if (!empty(Input::get('title')) && !empty(Input::get('author')) && !empty(Input::get('text')) ) {
			$titleTmp = Input::get('title');$idTmp='0';$changeId='0';
			foreach(Publication::all() as $publi) {
				$idTmp=$publi->id;
				if($publi->title == $titleTmp) {
					$changeId=1;
				}
			}
			if($changeId==1)
				$titleTmp="$titleTmp" . "(" . "$idTmp" . ")";
			$now = date('Y-m-d H:i:s');
			DB::table('publication')->insert(array('created_at' => $now,'updated_at' => $now,'title' => $titleTmp, 'author' => Input::get('author'), 'text' => Input::get('text')));
			return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
		}
	}
	
	public function putComments() {
		if(empty(Input::get('author')) && empty(Input::get('text')) ) {
			return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
		}
		else if (empty(Input::get('author')) && !empty(Input::get('text')) ) {
			$now = date('Y-m-d H:i:s');
			DB::table('comments')->insert(array('created_at' => $now,'updated_at' => $now,'title' => Input::get('title'), 'author' => 'Anonymous', 'text' => Input::get('text')));
			return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
		}
		else if (!empty(Input::get('author')) && empty(Input::get('text')) ) {
			return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
		}
		else {
			$now = date('Y-m-d H:i:s');
			DB::table('comments')->insert(array('created_at' => $now,'updated_at' => $now,'title' => Input::get('title'), 'author' => Input::get('author'), 'text' => Input::get('text')));
			return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
		}
	}

	public function deleteComment() {
		$comment = Comments::find(Input::get('id'));
		$comment -> delete();
		return View::make('accueil')->with('publications',Publication::all())->with('comments',Comments::all());
	}

	public function editComment() {
		return View::make('edit_comment')->with('id',Input::get('id'));
	}

}
