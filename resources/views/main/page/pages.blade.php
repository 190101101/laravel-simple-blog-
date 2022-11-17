@extends('layout.main')
 
@section('title', 'pages')

@section('content')
 
<div class="container">
    <h1 class="mt-4 mb-3">all pages</h1>

    <div class="row">
      @foreach($data['page'] as $page)

      <div class="col-lg-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/page/{{$page->page_slug}}">{{$page->page_title}}</a>
            </h4>
            <p class="card-text">{{Str::substr($page->page_content, 0, 100)}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- /.row -->

    {{$data['page']->links()}}

</div>
  

    
@endsection
@section('css')@endsection
@section('js')@endsection

        