@extends('main')

@section('title', '| View Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
  
      <p class=>{{ $post->body }}</p>
    </div>

    <div class="col-md-4">
      <div class="card card-body bg-light">
        <dl class="dl-horizontal">
          <dt>Created at:</dt>
          <dt>{{ date('l M j, Y g:ia', strtotime($post->created_at)) }}</dt>
        </dl>
        
        <dl class="dl-horizontal">
          <dt>Last updated:</dt>
          <dt>{{ date('l M j, Y g:ia', strtotime($post->created_at)) }}</dt>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            {{ Html::linkRoute('posts.index', '<< All Posts', [], ['class' => 'btn btn-outline-secondary btn-block btn-h1-spacing']) }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection