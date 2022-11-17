@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">setting page</h3>
            </div>
            <div class="box-body with-border">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>description</th>
                            <th>key</th>
                            <th>value</th>
                            <th>type</th>
                            <th><i class="fa fa-pencil-square"></i></th>
                            <th><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['setting'] as $setting)
                        <tr>
                            <td>{{$setting->id}}</td>
                            <td>{{$setting->setting_description}}</td>
                            <td>{{$setting->setting_key}}</td>
                            <td>{{Str::substr($setting->setting_value, 0, 50)}}</td>
                            <td>{{$setting->setting_type}}</td>
                            <td>
                                <a href="/admin/setting/update/{{$setting->id}}">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a @if($setting->setting_delete == 1)
                                    href="/admin/setting/delete/{{$setting->id}}"
                                    @endif>
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection

