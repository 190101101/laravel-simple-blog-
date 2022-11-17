@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">update page</h3> 
                <a href="/admin/setting" class="btn btn-success pull-right">setting</a>
            </div>
            <form action="/admin/setting/edit/{{$setting->id}}" method="POST" class="form-horizontal">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">value</label>
                        <div class="col-sm-10">
                            @if($setting->setting_type == 'text')
                                <input type="text" class="form-control" name="setting_value"
                                value="{{$setting->setting_value}}" required>
                            @endif

                            @if($setting->setting_type == 'textarea')
                                <textarea type="text" class="form-control" name="setting_value"
                                required>{{$setting->setting_value}}</textarea>
                            @endif

                            @if($setting->setting_type == 'editor')
                                <textarea id="editor1" name="setting_value">{{$setting->setting_value}}</textarea>
                                <script>CKEDITOR.replace('editor1')</script>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">created at</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            value="{{$setting->created_at}}"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">updated at</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            value="{{$setting->updated_at}}"> 
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

        