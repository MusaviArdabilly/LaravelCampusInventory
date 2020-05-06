@extends('layouts.main')

@section('content')

<script type="text/javascript">
  document.title="Dashboard";
  document.getElementById('dashboard').classList.add('active');
</script>

<div class="min-vh-100 pt-5 container">
    <div class="row justify-content-around">
	    <div class="col-12 col-md-6 col-lg-6 mb-5">
	    <a href="{{url('fakultas')}}" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-archway my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Fakultas</h4>
	            <h3 align="center">{{ $totalfakultas }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	    <div class="col-12 col-md-6 col-lg-6 mb-5">
	    <a href="{{url('jurusan')}}" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-book-open my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Jurusan</h4>
	            <h3 align="center">{{ $totaljurusan }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	</div>
	<div class="row justify-content-around">
	    <div class="col-12 col-md-6 col-lg-6 mb-5">
	    <a href="{{url('ruangan')}}" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-door-open my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Ruangan</h4>
	            <h3 align="center">{{ $totalruangan }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	    <div class="col-12 col-md-6 col-lg-6 mb-5">
	    <a href="{{url('barang')}}" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-cubes my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Barang</h4>
	            <h3 align="center">{{ $totalbarang }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	</div>
</div>
@stop