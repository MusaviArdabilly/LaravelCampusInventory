@extends('layouts.main')

@section('content')
    <div class="container min-vh-84">
        <div class="card mt-10 mb-5">
            <div class="card-header">
                <div class="h2 d-flex m-0">
                    Fakultas
                </div>
                <div class="d-flex">
                    <form method="GET" action="{{ route('fakultas.index') }}">
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
                        <th scope="col">Action</th>
                        <!-- <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $fakultas)
                    <tr>
                        <td scope="row" width="20px">{{ $data->firstItem() + $key }}</td>
                        <td>{{ $fakultas->name }}</td>
                        <td>Edit - Delete</td>
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

@stop