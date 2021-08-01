@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<form class="" action="/penilaian/cari" method="get">
  <input type="date" name="cari">
  <button type="submit" class="btn btn-success">Cari</button>
</form>
<div class="mb-3">
    <a href="/penilaian/create" class="btn btn-primary">Tambah Data</a>
</div>
<table class="table">
    <thead>
      <tr>
          <th scope="col">Id</th>
        <th scope="col">Karyawan</th>
        <th scope="col">kedisiplinan</th>
        <th scope="col">komitmen</th>
        <th scope="col">Kepatuhan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($penilaians as $penilaian)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$penilaian->karyawan->nama}}</td>
        <td>
            {{$penilaian->kedisiplinan}}
        </td>
        <td>
            {{$penilaian->komitmen}}
        </td>
        <td>
            {{$penilaian->kepatuhan}}
        </td>
        <td>
            {{$penilaian->tanggal}}
        </td>
        <td>
            <a href="/penilaian/delete/{{$penilaian->id}}" class="btn btn-danger">Hapus</a>
            <a href="/penilaian/edit/{{$penilaian->id}}" class="btn btn-success">Edit</a>
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
