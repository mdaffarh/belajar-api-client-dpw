@extends('layout.main')

@section('container')
    <h1>Customer #{{ $customer->id }}</h1>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Nama  : {{ $customer->name }}</li>
              <li class="list-group-item">ID Number :{{ $customer->id_number }}</li>
              <li class="list-group-item">Tanggal Lahir : {{ $customer->TL }}</li>
              <li class="list-group-item">Email : {{ $customer->email }}</li>
            </ul>
          </div>
          <a href="/customers" class="btn btn-primary mt-3">Back</a>
@endsection