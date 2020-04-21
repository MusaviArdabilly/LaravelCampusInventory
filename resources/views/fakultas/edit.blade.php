@extends('layouts.main')

@section('content')
<section class="section mt-5">

  @if(count($errors) > 0)
    <div class="card-body">
      <div class="alert alert-danger">
          Update Error
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    </div>
  @endif
  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ url('/fakultas') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
          <div class="card-body">
            <form action="{{ url('fakultas/update/'.$fakultas->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="faculty" class="form-control" value="{{ $fakultas->faculty }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
              </form>
          </div>
        </div>
      </div>  
  </div>

</section>
@endsection()
