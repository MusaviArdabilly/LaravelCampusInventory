@extends('layouts.main')

@section('content')
<div class="container min-vh-89">
    <div class="login-form center bg-dark">
      <h1>Log In</h1>

      @if ($message = Session::get('login_failed'))
        <center>
          <div class="alert alert-danger col-lg-8">
            <center><p>{{ $message }}</p></center>
          </div>
        </center>
      @endif

      <form class="form-signin" method="POST" action="{{ url('/login') }}" autocomplete="off">
        {{ csrf_field() }}
        <div class="form-label-group" style="margin-bottom: 32px;">
          <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
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
        <button class="btn btn-md btn-primary btn-block" type="submit">Log in</button><br><hr><br>
        <div class="text-center">
          <label>Don't have an account</label>&nbsp;&nbsp;&nbsp;<a href="/register">Register</a>
        </div>
      </form>
    </div>
</div>
@stop