@extends('layouts.app')
@section('title', 'Tambah Kategori')

@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori *</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="category_name" placeholder="Nama Kategori">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
