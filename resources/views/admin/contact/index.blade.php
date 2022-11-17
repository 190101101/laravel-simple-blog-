@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">contact page</h3>
            </div>
            <div class="box-body with-border">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>contact_email</th>
                            <th>contact_text</th>
                            <th><i class="fa fa-pencil-square"></i></th>
                            <th><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['contact'] as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->contact_email}}</td>
                            <td>{{$contact->contact_text}}</td>
                            <td>
                                <a href="/admin/contact/show/{{$contact->id}}">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a href="/admin/contact/delete/{{$contact->id}}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$data['contact']->links()}}
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection

