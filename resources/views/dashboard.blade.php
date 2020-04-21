@extends('layouts.main')

@section('content')
    {{-- <div class="min-vh-100 dashboard">
    	<div class="center">
    		<h1>Campus Inventory</h1>
    	</div>
    </div> --}}
<div class="min-vh-100 dashboard">
    <div class="row d-flex justify-content-around mb-5">
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="{{url('fakultas')}}" class="nounderline">
	      <div class="card card-primary">
	        <div class="card-header">
	          <i id="micon" class="fas fa-bookmark" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Fakultas</h4>
	            <h3 align="center">{{ $totalfakultas }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="{{url('jurusan')}}" class="nounderline">
	      <div class="card card-primary">
	        <div class="card-header">
	          <i id="micon" class="fas fa-bookmark" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Jurusan</h4>
	            <h3 align="center">{{ $totaljurusan }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	</div>
	<div class="row d-flex justify-content-around">
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="{{url('ruangan')}}" class="nounderline">
	      <div class="card card-secondary">
	        <div class="card-header">
	          <i id="micon" class="fas fa-bookmark" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Ruangan</h4>
	            <h3 align="center">{{ $totalruangan }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="{{url('barang')}}" class="nounderline">
	      <div class="card card-info">
	        <div class="card-header">
	          <i id="micon" class="fas fa-bookmark" aria-hidden="true"></i>
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