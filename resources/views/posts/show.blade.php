@extends ('layouts.master')

@section ('content')
  <div class="col-sm-8 blog-main">
      <h2>{{ $post->title }}</h2>
      <p> {{ $post->body }}</p>
      
      <div class="comments">
        <ul class="list-group">
          @foreach ($post->comments as $comment)
            <li class="list-group-item">
              <strong>
                {{ $comment->created_at->diffForHumans() }}: &nbsp;
              </strong>
              {{ $comment->body }}
            </li>
          @endforeach
        </ul>
      </div>
  </div>
@endsection