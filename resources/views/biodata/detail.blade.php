@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Detail Siswa</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>Nama Siswa:</strong> {{$biodata->namaSiswa}}
        </div>
        <br>
        <div class="col-md-12">
            <strong>Alamat Siswa:</strong>{{$biodata->alamatSiswa}}
        </div>
        <div class="col-md-12">
            <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</div>
@endsection