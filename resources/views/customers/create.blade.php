@extends('layout.main')

@section('container')
<h2>Tambah Data Customer</h2>
<form class="col-md-8 mt-4" method="POST" action="/customers">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="mb-3">
      <label for="id_number" class="form-label">ID Number</label>
      <input type="number" class="form-control" name="id_number" id="id_number">
    </div>
    <div class="mb-3">
      <label for="TL" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" name="TL" id="TL">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
   
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection