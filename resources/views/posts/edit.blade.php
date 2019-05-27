@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
      {{ Form::label('title', 'Title:') }}
      {{ Form::text('title', null, ['class' => 'form-control']) }}
      
      {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
      {{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.update', 'Save', array($post->id), array('class' => 'btn btn-success btn-block')) !!}          </div>
        </div>
        
      </div>
    </div>
    {!! Form::close() !!}
  </div>

@endsection