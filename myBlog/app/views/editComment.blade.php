@extends('edit_comment')
 	<div style="visibility: hidden">
	{{ $comment = Comments::find($id)}}</div>

@section('edit')
	{{ Form::open(array('url'=>'editDoneComment','action'=>'editPublication','role'=>'form','method'=>'POST'))}}
	{{ Form::hidden('id',$comment->id,array('type'=>'hidden','style'=>'assets/css/main.css')) }}<br>
	{{ Form::text('author',$comment->author,array('placeholder' => 'Author')) }}<br>
	{{ Form::textarea('text',$comment->text, array('class'=>'field','placeholder' => 'Your Joke','size'=>'30x5')) }}<br>
	{{ Form::submit('done', '', array('placeholder' => 'Submit', 'type'=>'submit')) }}
	{{ Form::close() }}
@stop