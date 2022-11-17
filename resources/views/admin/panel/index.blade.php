@extends('layout.admin')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">panel page</h3>
            </div>
            <div class="box-body with-border">
                {{Auth::user()}}
            </div>
        </div>
    </section>
@endsection

@section('css')@endsection
@section('js')@endsection
