@extends('layouts.main')

@section('content')

<script type="text/javascript">
  document.title="Barang";
  document.getElementById('barang').classList.add('active');
</script>

    <div class="container min-vh-100">
        @if(auth()->user()->role == "admin")
        <a href="#myModal" data-toggle="modal"><button type="button" class="btn btn-secondary mt-5">Tambah</button></a>
        <a href="/barang/export"><button type="button" class="btn btn-secondary mt-5">Export</button></a>
        @elseif(auth()->user()->role == "staff")
        <div class="pt-6"></div>
        @endif
        @if(count($errors) > 0)
            <div class="card-body">
                <div class="alert alert-danger">
                    Create Error
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="card mt-2 mb-5">
            <div class="card-header">
                <div class="h2 d-flex m-0">
                    Barang
                </div>
                <div class="d-flex">
                    <form method="GET" action="{{ url('/barang') }}">
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
                        <th scope="col">Ruangan</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Rusak</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Diupdate</th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $barang)
                    <tr>
                        <td scope="row" width="20px">{{ $data->firstItem()+$key }}</td>
                        <td>{{ $barang->ruangan->room }}</td>
                        <td><img class="img-table" src="{{url('uploads/'.$barang->itempic)}}" onerror="this.style.display = 'none'"> {{ $barang->item }}</td>
                        <td>{{ $barang->total }}</td>
                        <td>{{ $barang->broken }}</td>
                        <td>@foreach($user as $userdata)
                                @if($userdata->id == $barang->created_by)
                                    {{ $userdata->username }}
                                @endif
                            @endforeach
                        </td>
                        <td>@foreach($user as $userdata)
                                @if($userdata->id == $barang->updated_by)
                                    {{ $userdata->username }}
                                @endif
                            @endforeach
                        </td>
                        <td><a href="{{ url('barang/edit/'.$barang->id) }}">Edit</a> @if(auth()->user()->role == "admin") - <a href="{{ url('barang/delete/'.$barang->id) }}" onclick="return confirm('Anda ingin menghapus data Barang {{ $barang->item}}?')">Delete</a> @endif </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="3" class="text-center">Data Tidak Ditemukan</td>
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
                <form method="POST" action="{{ url('/barang/store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label>Ruangan</label><br>
                        <select name="id_ruangan" class="form-control" required="">
                            @foreach($ruangan as $data)
                                <option value="{{$data->id}}">{{$data->room}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-body">
                        <label>Nama Barang</label><br>
                        <input type="text" class="form-control" placeholder="Nama Barang" name="item">
                    </div>
                    <div class="modal-body">
                        <label>Total Barang</label><br>
                        <input type="number" min="0" class="form-control" placeholder="Total Barang" name="total">
                    </div>
                    <div class="modal-body">
                        <label>Barang Rusak</label><br>
                        <input type="number" min="0" class="form-control" placeholder="Barang Rusak" name="broken">
                    </div>
                    <div class="modal-body">
                        <label>Foto Barang</label><br>
                        <input type="file" min="0" placeholder="Foto Barang" name="itempic">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="sumbit" class="btn btn-primary">Tambah</button>
                    </div>
                    <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
                </form>
            </div>
        </div>
    </div>

@stop