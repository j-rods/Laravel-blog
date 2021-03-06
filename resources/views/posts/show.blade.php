@extends ('layouts.master')

@section ('content')
  <div class="col-sm-8 blog-main">
      <h2>{{ $post->title }}</h2>
      
      @if (count($post->tags))
        <ul>
          Tags:
          @foreach ($post->tags as $tag)
            <a href="/posts/tags/{{ $tag->name }}">
              {{ $tag->name }}
            </a>
          @endforeach
        </ul>
      @endif
      
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
      <!-- Add a comment -->
      <hr>
      <div class="card">
        <div class="card-block">
          <form method="POST" action ="/posts/{{ $post->id }}/comments">
              {{ csrf_field() }}
              <div class="form-group">
                <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
              </div>
          </form>
          @include ('layouts.errors')
        </div>
      </div>
  </div>
@endsection