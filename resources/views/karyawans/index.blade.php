@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="mb-3">
    <a href="/karyawan/create" class="btn btn-primary">Tambah Data</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Photo</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($karyawans as $karyawan)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$karyawan->nik}}</td>
        <td>{{$karyawan->nama}}</td>
        <td>{{$karyawan->tanggal_lahir}}</td>
        <td>{{$karyawan->jenis_kelamin}}</td>
        <td><img src="{{asset('img/'.$karyawan->photo)}}" style="max-width : 100%" alt=""></td>
        <td>{{$karyawan->alamat}}</td>
        <td>
            <a href="/karyawan/delete/{{$karyawan->id}}" class="btn btn-danger">Hapus</a>
            <a href="/karyawan/edit/{{$karyawan->id}}" class="btn btn-success">Edit</a>
        </td>
      </tr>
      @empty
        <tr>
            <td>Tidak Ada Data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
