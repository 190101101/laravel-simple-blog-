@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">update page</h3> 
                <a href="/admin/blog" class="btn btn-success pull-right">blog</a>
            </div>
            <form action="{{route('blog.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="blog_title" placeholder="blog title"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">content</label>
                        <div class="col-sm-10">
                            <textarea id="editor1" name="blog_content" placeholder="blog content"></textarea>
                            <script>CKEDITOR.replace('editor1')</script>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">create</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection

        