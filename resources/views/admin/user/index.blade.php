@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">user page</h3>
                <a href="{{route('user.create')}}" class="btn btn-success pull-right">create</a>
            </div>
            <div class="box-body with-border">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>type</th>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th><i class="fa fa-pencil-square"></i></th>
                            <th><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['user'] as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->type}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>
                                <a href="{{route('user.edit', $user->id)}}">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="border:none; outline: none; background: none;">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$data['user']->links()}}
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
