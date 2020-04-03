@extends('layouts.main')

@section('content')
<div class="container min-vh-89">
    <div class="register-form center bg-dark">
      <h1>Registration</h1>

      @if ($message = Session::get('registration_failed'))
        <center>
          <div class="alert alert-danger col-lg-8">
            <center><p>{{ $message }}</p></center>
          </div>
        </center>
      @endif

      <form class="form-signin" method="POST" action="{{ url('/register') }}" autocomplete="off">
        {{ csrf_field() }}
        <div class="form-label-group" style="margin-bottom: 32px;">
          <input type="text" id="inputEmail" class="form-control" name="name" placeholder="Username" required autofocus>
          <!-- <label for="inputEmail">Email address</label> -->
        </div>

        <div class="form-label-group" style="margin-bottom: 32px;">
          <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
          <!-- <label for="inputEmail">Email address</label> -->
        </div>

        <div class="form-label-group" style="margin-bottom: 42px;">
          <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
          <!-- <label for="inputPassword">Password</label> -->
        </div>

        <button class="btn btn-md btn-primary btn-block" type="submit">Register</button><br><hr><br>
        <div class="text-center">
          <label>Already have an account</label>&nbsp;&nbsp;&nbsp;<a href="/login">Login</a>
        </div>
      </form>
    </div>
    </div>
</div>
@stop