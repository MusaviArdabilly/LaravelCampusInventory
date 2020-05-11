@extends('layouts.main')

@section('content')

<script type="text/javascript">
  document.title="Login";
</script>

<div class="container min-vh-100">
    <div class="login-form center bg-dark">
      <h1>Log In</h1>

      <form class="form-signin" method="POST" action="{{ url('/postlogin') }}" autocomplete="off">
        {{ csrf_field() }}
        <div class="form-label-group" style="margin-bottom: 32px;">
          <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
          <!-- <label for="inputEmail">Email address</label> -->
        </div>

        <div class="form-label-group" style="margin-bottom: 42px;">
          <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
          <!-- <label for="inputPassword">Password</label> -->
        </div>

        <div class="custom-control custom-checkbox mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheck1">
          <label class="custom-control-label" for="customCheck1">Remember Email</label>
        </div>
        <button class="btn btn-md btn-primary btn-block" type="submit">Log in</button><br>
        @if($message = Session::get('errors'))
          <div class="alert alert-danger text-center bg-transparent border-3 border-danger text-white">
            {{ $message }}
          </div>
        @endif<hr><br>
        <div class="text-center">
          <label>Don't have an account</label>&nbsp;&nbsp;&nbsp;<a href="/register">Register</a>
        </div>
      </form>
    </div>
</div>
@stop