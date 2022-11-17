@extends('layout.main')
@section('content')
 
    <h2>blogs</h2>

    <div class="row">
      @foreach($data['blog'] as $blog)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/blog/{{$blog->blog_slug}}">{{$blog->blog_title}}</a>
            </h4>
            <p class="card-text">{{Str::substr($blog->blog_content, 0, 50)}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    {{$data['blog']->links()}}
    <!-- /.row -->

@endsection
@section('css')@endsection
@section('js')@endsection

        