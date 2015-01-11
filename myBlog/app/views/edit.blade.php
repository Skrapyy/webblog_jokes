@extends('edit_publication')
 	<div style="visibility: hidden">
	{{ $publication = Publication::find($id)}}</div>

@section('edit')
	{{ Form::open(array('url'=>'editDone','action'=>'editPublication','role'=>'form','method'=>'POST'))}}
	{{ Form::hidden('id',$publication->id,array('type'=>'hidden','style'=>'assets/css/main.css')) }}<br>
	{{ Form::text('title',$publication->title,array('placeholder'=>'Title')) }}<br>
	{{ Form::text('author',$publication->author,array('placeholder' => 'Author')) }}<br>
	{{ Form::textarea('text',$publication->text, array('class'=>'field','placeholder' => 'Your Joke','size'=>'30x5')) }}<br>
	{{ Form::submit('done', '', array('placeholder' => 'Submit', 'type'=>'submit')) }}
	{{ Form::close() }}
@stop