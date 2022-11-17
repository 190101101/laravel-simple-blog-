@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">update page</h3> 
                <a href="/admin/user" class="btn btn-success pull-right">user</a>
            </div>
            <form action="{{route('user.update', $user->id)}}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">type</label>
                        <div class="col-sm-10">
                            <select name="type" class="form-control">
                                <option value="{{$user->type}}" selected>{{$user->type}}</option>
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{$user->name}}"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" value="{{$user->email}}"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" value="{{$user->password}}"> 
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

        