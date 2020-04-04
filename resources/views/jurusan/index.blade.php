@extends('layouts.main')

@section('content')
    <div class="container min-vh-100">
        <a href="#myModal" data-toggle="modal"><button type="button" class="btn btn-secondary mt-6">Tambah</button></a>
        <div class="card mt-2 mb-5">
            <div class="card-header">
                <div class="h2 d-flex m-0">
                    Jurusan
                </div>
                <div class="d-flex">
                    <form method="GET" action="{{ url('/jurusan/search') }}">
                        <div class="input-group mb-3 my-auto">
                            <input type="text" name="searchInput" class="form-control w-50" placeholder="Type Here...">
                            <button class="form-control btn-secondary" type="submit">search</button>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">fakultas</th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $jurusan)
                    <tr>
                        <td scope="row" width="20px">{{ $data->firstItem() + $key }}</td>
                        <td>{{ $jurusan->name }}</td>
                        <td>@foreach($fakultas as $f)
                                        @if($f->id == $jurusan->id_fakultas)
                                            {{ $f->name }}
                                        @endif
                                    @endforeach</td>
                        <td><a href="{{ url('jurusan/edit/'.$jurusan->id) }}">Edit</a> - <a href="{{ url('jurusan/delete/'.$jurusan->id) }}">Delete</a></td>
                        <!-- <td>@mdo</td> -->
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4" class="text-center">Data Tidak Ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $data->links() }}
    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ url('/jurusan/store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label>Nama Fakultas</label><br>
                        <select name="id_fakultas" class="form-control">
                            @foreach($fakultas as $f)
                            <option value="{{ $f->id }}">{{ $f->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Jurusan" name="name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="sumbit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@stop