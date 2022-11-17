@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">blog page</h3>
                <a href="{{route('blog.create')}}" class="btn btn-success pull-right">create</a>
            </div>
            <div class="box-body with-border">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>content</th>
                            <th><i class="fa fa-pencil-square"></i></th>
                            <th><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['blog'] as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->blog_title}}</td>
                            <td>{{Str::substr($blog->blog_content, 0, 50)}}</td>
                            <td>
                                <a href="{{route('blog.edit', $blog->id)}}">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
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

                {{$data['blog']->links()}}
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
