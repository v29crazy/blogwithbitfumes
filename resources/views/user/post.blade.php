@extends('user/app')

@section('bg-img',asset('user/img/post-bg.jpg'))
@section('title',$post->title)
@section('sub-heading',$post->subtitle)
    


@section('main-content')
    <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
        <small>Created at {{$post->created_at->diffForHumans() }}</small>

          @foreach ($post->categories as $category)
            <small class="pull-right ml-3">{{$category->name}}</small>
          @endforeach

          {!!htmlspecialchars_decode($post->body)!!}

          @foreach ($post->tags as $tag)
            <small class="pull-right ml-3">{{$tag->name}}</small>
          @endforeach
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection