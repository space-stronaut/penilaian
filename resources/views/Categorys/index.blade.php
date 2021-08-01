@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="mb-3">
    <a href="/Category/create" class="btn btn-primary">Tambah Data</a>
</div>
<table class="table">
    <thead>
      <tr>
          <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($Categorys as $category)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$category->nama}}</td>
        <td>
            <a href="/Category/delete/{{$category->id}}" class="btn btn-danger">Hapus</a>
            <a href="/Category/edit/{{$category->id}}" class="btn btn-success">Edit</a>
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