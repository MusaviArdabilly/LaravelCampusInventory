@extends('layouts.main')

@section('content')
  <section class="section mt-5">

<script type="text/javascript">
  document.title="Edit Ruangan";
  document.getElementById('ruangan').classList.add('active');
</script>
  
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
          <div class="card m-auto">
            <div class="card-header">
              <div class="h2 d-flex m-0">
                Edit Ruangan
              </div>
              <a href="{{ url('/ruangan') }}"> 
                <button type="button" class="btn btn-outline-info">
                  <i class="fas fa-arrow-circle-left"></i> Back
                </button>
            </a>
            </div>
            <div class="card-body">
              <form action="{{ url('ruangan/update/'.$ruangan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Ruangan</label>
                  <input type="text" name="room" class="form-control" value="{{ $ruangan->room }}">
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