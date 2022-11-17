@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">update page</h3> 
                <a href="/admin/page" class="btn btn-success pull-right">page</a>
            </div>
            <form action="{{route('page.update', $page->id)}}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">title</label>
                        <div class="col-sm-10">
                            <input name="page_title" class="form-control" value="{{$page->page_title}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">content</label>
                        <div class="col-sm-10">
                            <textarea id="editor1" name="page_content">{{$page->page_content}}</textarea>
                            <script>CKEDITOR.replace('editor1')</script>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">created at</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            value="{{$page->created_at}}"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">updated at</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"value="{{$page->updated_at}}">
                        </div>
                    </div>
                    
                </div>
                <div class="box-footer">
                    <input type="text" class="form-control" name="file_delete" value="{{$page->page_file}}">
                    <button type="submit" class="btn btn-success pull-right">update</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection

        