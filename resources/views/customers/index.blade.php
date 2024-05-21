@extends('layout.main')

@section('container')
<h1>Customer</h1>

<a href="/customers/create" class="btn btn-success my-3">Tambah Data</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Number ID</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $c)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $c->name }}</td>
                <td>{{ $c->id_number}}</td>
                <td>{{ $c->TL }}</td>
                <td>{{ $c->email }}</td>
                <td>
                    <div class="btn-group">

                        <a href="/customers/{{ $c->id }}" class="btn btn-sm btn-warning">Show</a>
                        <a href="/customers/{{ $c->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/customers/{{ $c->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection