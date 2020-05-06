@extends('layouts.main')

@section('content')

<script type="text/javascript">
  document.title="Fakultas";
  document.getElementById('fakultas').classList.add('active');
</script>

    <div class="container min-vh-100">
        <a href="#myModal" data-toggle="modal"><button type="button" class="btn btn-secondary mt-5">Tambah</button></a>
        <a href="#ModalImport" data-toggle="modal"><button type="button" class="btn btn-outline-secondary mt-5">Import Excel</button></a>
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
        <div class="card mt-2 mb-5 table-responsive">
            <div class="card-header">
                <div class="h2 d-flex m-0">
                    Fakultas
                </div>
                <div class="d-flex">
                    <form method="GET" action="{{ url('/fakultas') }}">
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
                        <th scope="col">Fakultas</th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $fakultas)
                    <tr>
                        <td scope="row" width="20px">{{ $data->firstItem() + $key }}</td>
                        <td>{{ $fakultas->faculty }}</td>
                        <td><a href="{{ url('fakultas/edit/'.$fakultas->id) }}">Edit</a> - <a href="{{ url('fakultas/delete/'.$fakultas->id) }}" onclick="return confirm('Anda ingin menghapus data Fakultas {{ $fakultas->faculty}}?')">Delete</a></td>
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
                <form method="POST" action="{{ url('/fakultas/store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label>Nama Fakultas</label><br>
                        <input type="text" class="form-control" placeholder="Fakultas" name="faculty">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="sumbit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Import HTML -->
    <div id="ModalImport" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ url('/fakultas/import') }}" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Import Excel</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label>Upload data Fakultas</label><br>
                        <input type="file" class="form-control" placeholder="Fakultas" name="excel" accept=".xls, .xlsx">
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