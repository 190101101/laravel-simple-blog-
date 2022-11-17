@extends('layout.main')
@section('title', 'blog')

@section('content')
<div class="container">
  

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{$blog->blog_title}}</h1>
    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">

        <hr>

        <!-- Date/Time -->
        <p>{{$blog->created_at}}</p>

        <hr>

        <!-- Post Content -->
        <div>
            <p class="lead">
              {!!$blog->blog_content!!}
            </p>
        </div>

        <hr>

      </div>

    </div>
    <!-- /.row -->

  
</div>
  

    
@endsection
@section('css')@endsection
@section('js')@endsection

        
