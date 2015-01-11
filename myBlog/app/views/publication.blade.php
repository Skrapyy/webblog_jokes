@extends('template_blog')
 
@include('navigation')
 
@section('content')
 
<div class="row">
    <div class="span12">
        <div class="well">
            <em class="pull-right">
                Ecrit le {{date('d-m-Y',strtotime($publication->created_at))}} par {{$publication->author}}
            </em>
            <h3>
                {{$publication->title}}
            </h3>
            <p>
                {{$publication->text}}
            </p>
        </div>
    </div>
</div>
 
@foreach ($comments as $comment)
<div class="row">
    <div class="span12">
        <div class="comment">
            <em class="pull-right">
                Ecrit par {{$comment->author}} le {{date('d-m-Y',strtotime($comment->created_at))}}
            </em>
            <h5>
                {{$comment->title}}
            </h5>
            <p>
                {{$comment->text}}
            </p>
        </div>
    </div>
</div>
@endforeach
 
<hr />
<div class="row">
    <div class="span12">
        <div class="well">
            {{ Form::open(array('url' => 'comment')) }}
            {{ Form::hidden('id_art', $publication->id) }}
			{{ Form::label('author', 'Username :') }}
            {{ Form::text('username') }}	
            {{ Form::label('title', 'Titre de votre commentaire :') }}
            {{ Form::text('title') }}
            {{ Form::label('comment', 'Votre commentaire :') }}
            {{ Form::textarea('comment') }}
            {{ Form::submit('Envoyer') }}
            {{ Form::close() }}
        </div>
    </div>
</div>
 
@stop