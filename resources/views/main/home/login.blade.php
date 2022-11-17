@extends('layout.main')
@section('title', 'login')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h3 class="text-center">login</h3>
        <form action="/login" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
          <div class="form-check">
            <input type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label">remember</label>
          </div>
          <div class="form-group" align="right">
            <button type="submit" class="btn btn-success">log in</button>
          </div>
        </form>
        </div>
    </div>
</div>
<!-- /.login-box -->
@endsection