@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">update page</h3> 
                <a href="/admin/blog" class="btn btn-success pull-right">blog</a>
            </div>
            <form action="{{route('blog.update', $blog->id)}}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">title</label>
                        <div class="col-sm-10">
                            <input name="blog_title" class="form-control" value="{{$blog->blog_title}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">content</label>
                        <div class="col-sm-10">
                            <textarea id="editor1" name="blog_content">{{$blog->blog_content}}</textarea>
                            <script>CKEDITOR.replace('editor1')</script>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">created at</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            value="{{$blog->created_at}}"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">updated at</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"value="{{$blog->updated_at}}">
                        </div>
                    </div>
                    
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">update</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection

        