@extends('template_blog')
 
@section('content')
	@foreach($publications as $publication)
		<h2>
		{{ $publication->title }}
		{{ Form::open(array('url'=>'editPublication','action'=>'add','role'=>'form','method'=>'POST'))}}
		{{ Form::hidden('id',$publication->id,array('type'=>'hidden','style'=>'assets/css/main.css')) }}<br>
		{{ Form::submit('Edit', '', array('type'=>'submit')) }}
		{{ Form::close() }}
		{{ Form::open(array('url'=>'deletePublication','action'=>'add','role'=>'form','method'=>'POST'))}}
		{{ Form::hidden('id',$publication->id,array('type'=>'hidden','style'=>'assets/css/main.css')) }}<br>
		{{ Form::submit('Delete', '', array('type'=>'submit')) }}
		{{ Form::close() }}
		</h2>
		<h4>{{ $publication->text }}</h4>
		<p>Posted on {{ $publication->created_at->format('M jS, Y') }}  by
		<a href="mailto:{{ $publication->email }}">{{ $publication->author}}</a>
		</p><hr />
		@foreach($comments as $comment)
			@if($comment->title == $publication->title)
				<h6>{{ $comment->text }}</h6>
				<p>Comment on {{ $comment->created_at->format('M jS, Y') }}  by
				<a href="mailto:{{ $comment->email }}">{{ $comment->author}}</a>
					{{ Form::open(array('url'=>'editComment','action'=>'add','role'=>'form','method'=>'POST'))}}
					{{ Form::hidden('id',$comment->id,array('type'=>'hidden','style'=>'assets/css/main.css')) }}<br>
					{{ Form::submit('Edit', '', array('type'=>'submit')) }}
					{{ Form::close() }}
					{{ Form::open(array('url'=>'deleteComment','action'=>'add','role'=>'form','method'=>'POST'))}}
					{{ Form::hidden('id',$comment->id,array('type'=>'hidden','style'=>'assets/css/main.css')) }}<br>
					{{ Form::submit('Delete', '', array('type'=>'submit')) }}
					{{ Form::close() }}
				</p><hr />
			@endif
		@endforeach
		{{ Form::open(array('url'=>'addComment','action'=>'add','role'=>'form','method'=>'POST'))}}
		{{ Form::hidden('title',$publication->title,array('type'=>'hidden')) }}<br>
		{{ Form::text('author','',array('placeholder' => 'Author')) }}<br>
		{{ Form::textarea('text', '', array('class'=>'field','placeholder' => 'Your comment','size'=>'30x5')) }}<br>
		{{ Form::submit('add', '', array('placeholder' => 'Submit', 'type'=>'submit')) }}
		{{ Form::close() }}
	@endforeach
@stop

@section('post')
		{{ Form::open(array('url'=>'addPublication','action'=>'addPublication','role'=>'form','method'=>'POST'))}}
		{{ Form::text('title','',array('placeholder'=>'Title')) }}<br>
		{{ Form::text('author','',array('placeholder' => 'Author')) }}<br>
		{{ Form::textarea('text', '', array('class'=>'field','placeholder' => 'Your Joke','size'=>'30x5')) }}<br>
		{{ Form::submit('add', '', array('placeholder' => 'Submit', 'type'=>'submit')) }}
		{{ Form::close() }}
@stop