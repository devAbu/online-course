@extends('layouts.master')
@section('content')
{{-- <div class="row">
    <div class="col-12">
      <h1>Some content</h1>
    {{-- <p>{{ 2 == 23 ? "Hello" : "nije equal" }}</p> --}}{{-- samo jedna linije, ne moze vise --}
      @if(true)
        <p>Displays when it is true</p>
      @else
        <p>Displays when it is false</p>
      @endif
      <hr>
      @for($i = 0; $i < 5; $i++)
        <p> {{ $i + 1 }} . Iteration </p>
      @endfor
      <hr>
      <h2> XSS Protection </h2>
      {{"<script> alert('Hello') </script>"}}
      {!! "<script> alert('Hello') </script>" !!}
    </div>
</div> --}}

      <div class="row">
          <div class="col-md-12">
              <p class="quote"> The beatufil Laravel</p>
          </div>
      </div>
      @foreach ($posts as $post)
          
      
      <div class="row">
          <div class="col-md-12 text-center">
              <h1 class="post-title"> {{$post['title']}}</h1>
              <p>{{$post['content']}}</p>
              <p><a href="{{ route('blog.post', ['id' => array_search($post, $posts)])}}">Read more...</a></p>
          </div>
      </div>
      <hr>
      @endforeach
@endsection