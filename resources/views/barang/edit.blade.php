@extends('layouts.main')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>
      Barang <small>Edit Data</small>
    </h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ url('/barang') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
          <div class="card-body">
            <form action="{{ url('barang/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Ruangan</label><br>
                  <select name="id_ruangan" class="form-control" required="">
                    @foreach($ruangan as $room)
                      <option value="{{$room->id}}">{{$room->room}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label>Barang</label>
                <input type="text" name="item" class="form-control" value="{{ $data->item }}">
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input type="text" name="total" class="form-control" value="{{ $data->total }}">
              </div>
              <div class="form-group">
                <label>Rusak</label>
                <input type="text" name="broken" class="form-control" value="{{ $data->broken }}">
              </div>
              <input type="hidden" name="created_by" value="{{ $data->created_by }}">
              <input type="hidden" name="updated_by" value="{{auth()->user()->id}}">
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
