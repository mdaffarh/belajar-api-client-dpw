@extends('layout.main')

@section('container')
<h2>Edit Data Customer</h2>
<form class="col-md-8 mt-4" method="POST" action="/customers/{{ $customer->id }}">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ $customer->name }}">
    </div>
    <div class="mb-3">
      <label for="id_number" class="form-label">ID Number</label>
      <input type="number" class="form-control" name="id_number" id="id_number" value="{{ $customer->id_number }}">
    </div>
    <div class="mb-3">
      <label for="TL" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" name="TL" id="TL" value="{{ $customer->TL }}">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ $customer->email }}">
    </div>
   
    <button type="submit" class="btn btn-success">Update</button>
  </form>
@endsection