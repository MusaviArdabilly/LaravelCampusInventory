@extends('layouts.main')

@section('content')
<div class="container min-vh-80">
    <div class="card mt-5 mb-5">
        <div class="card-header">
            <div class="h2 d-flex">
                Fakultas
            </div>
            <div class="d-flex">
                    <form method="GET" action="{{ route('fakultas.index') }}">
                <div class="input-group mb-3 my-auto">
                        <input type="text" name="searchInput" class="form-control" placeholder="Type Here...">
                        <button class="form-control btn btn-secondary" type="submit">search</button>
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
                <?php $no =1;?>
                @forelse($data as $fakultas)
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td>{{ $fakultas->name }}</td>
                    <td>Edit - Delete</td>
                    <!-- <td>@mdo</td> -->
                </tr>
                @empty
                <tr>
                  <td colspan="3" class="text-center">Data kosong</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
 

@stop