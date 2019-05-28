@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
      {{ Form::label('title', 'Title:') }}
      {{ Form::text('title', null, ['class' => 'form-control']) }}

      {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
      {{ Form::text('slug', null, ['class' => 'form-control']) }}
      
      {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
      {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>

    <div class="col-md-4">
      <div class="card card-body bg-light">
        <dl class="dl-horizontal">
          <span class="badge badge-info">Created</span>
          <p>{{ date('l M j, Y g:ia', strtotime($post->created_at)) }}</p>
        </dl>
        
        <dl class="dl-horizontal">
          <span class="badge badge-info">Last updated</span>
          <p>{{ date('l M j, Y g:ia', strtotime($post->created_at)) }}</p>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
          </div>
        </div>
        
      </div>
    </div>
    {!! Form::close() !!}
  </div>

@endsection