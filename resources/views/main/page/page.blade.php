@extends('layout.main')
@section('title', 'page')

@section('content')
 
<div class="container">
  

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{$page->page_title}}</h1>
    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">

        <hr>

        <!-- Date/Time -->
        <p>{{$page->created_at}}</p>

        <hr>

        <!-- Post Content -->
        <div>
            <p class="lead">
              {!!$page->page_content!!}
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

        
