@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<form action="/penilaian/update/{{$penilaian->id}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="exampleInputEmail1">Karyawan</label>
        <select name="karyawan_id" id="" class="form-control">
            @foreach ($karyawans as $category)
                <option value="{{$category->id}}" {{$category->id == $penilaian->karyawan_id ? 'selected' : ''}}>{{$category->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Detail</label>
        <select name="detail_id" id="" class="form-control">
            @foreach ($details as $category)
                <option value="{{$category->id}}" {{$penilaian->id == $penilaian->detail_id ? 'selected' : ''}}>{{$category->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Value</label>
        <input type="number" name="value" value="{{$penilaian->value}}" id="">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal</label>
        <input type="date" name="tanggal" value="{{$penilaian->tanggal}}" id="">
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