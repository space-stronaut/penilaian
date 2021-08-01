@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<form action="/penilaian" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Karyawan</label>
        <select name="karyawan_id" id="" class="form-control">
            @foreach ($karyawans as $category)
                <option value="{{$category->id}}">{{$category->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kedisiplinan</label>
            <select name="kedisiplinan" id="" class="form-control">
              <option value="" disabled selected>Pilih</option>
                <option value="Datang Tepat Waktu">Datang Tepat Waktu</option>
                <option value="Memakai Seragam yang sudah ditentukan">Memakai Seragam yang sudah ditentukan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Komitmen</label>
            <select name="komitmen" id="" class="form-control">
              <option value="" disabled selected>Pilih</option>
                <option value="Mengangkat,mentaati dan melaksanakan sumpah/janji pegawai dan atau sumpah janji atau jabatan">Mengangkat,mentaati dan melaksanakan sumpah/janji pegawai dan atau sumpah janji atau jabatan</option>
                <option value="Saling bekerjasama dengan pegawai lainnya untuk pekerjaan yang penyelesaiannya harus diselesaikan bersama">Saling bekerjasama dengan pegawai lainnya untuk pekerjaan yang penyelesaiannya harus diselesaikan bersama</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kepatuhan</label>
            <select name="kepatuhan" id="" class="form-control">
              <option value="" disabled selected>Pilih</option>
                <option value="Melakukan Pekerjaan diluar tanggungjawab dan kewenangannya tanpa seizin atasan">Melakukan Pekerjaan diluar tanggungjawab dan kewenangannya tanpa seizin atasan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal</label>
        <input type="date" name="tanggal" id="">
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
