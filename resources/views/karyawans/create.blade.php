@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<form action="/karyawan" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">NIK</label>
      <input type="number" class="form-control" name="nik" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama</label>
      <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tangga; Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Photo</label>
        <input type="file" class="form-control" name="photo" id="exampleInputPassword1" placeholder="Password">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
