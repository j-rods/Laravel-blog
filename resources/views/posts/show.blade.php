@extends ('layouts.master')

@section ('content')
  <div class="col-sm-8 blog-main">
      <h2>{{ $post->title }}</h2>
      <p> {{ $post->body }}</p>
  </div>
@endsection