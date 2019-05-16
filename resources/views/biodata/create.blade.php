@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Create New Biodata</h3>
        </div>
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops! </strong>There where some problems with your input.<br>
        <ul>
            @foreach($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('biodata.store') }}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <strong>Nama Siswa:</strong>
                <input type="text" name="namaSiswa" class="form-control" placeholder="Nama Siswa">
            </div>
            <div class="col-md-12">
                <strong>Alamat Siswa:</strong>
                <textarea name="alamatSiswa" placeholder="Alamat Siswa" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-success">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
    </form>



</div>
@endsection