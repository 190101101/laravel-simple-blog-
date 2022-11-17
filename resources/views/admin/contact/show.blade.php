@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">contact</h3> 
                <a href="/admin/contact" class="btn btn-success pull-right">contacts</a>
            </div>

            <div class="box-body with-border">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>email</th>
                            <th>text</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->contact_email}}</td>
                            <td>{{$contact->contact_text}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection

        