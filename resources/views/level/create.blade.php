@extends('layouts.app')
@section('title', 'Tambah Kategori')

@section('content')
    <form action="{{ route('level.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Level *</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="level_name" placeholder="Nama Level">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
