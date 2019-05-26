@extends('main')

@section('title', '| Home')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1 class="display-4">James' Blog</h1>
        <p class="lead">Thanks for visiting. This is a test site built with Laravel.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a>
      </div>
    </div>
  </div> <!-- end of header .row-->
  <div class="row">
    <div class="col-md-8">
      
      <div class="post">
        <h3>Post heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
        <a href="#" class="btn btn-primary">Read more</a>
        </p>
      </div>
      <hr>
      
      <div class="post">
        <h3>Post heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
        <a href="#" class="btn btn-primary">Read more</a>
        </p>
      </div>
      <hr>
      
      <div class="post">
        <h3>Post heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
        <a href="#" class="btn btn-primary">Read more</a>
        </p>
      </div>
      <hr>
    </div>
    
    <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
    </div>
  </div>
@endsection