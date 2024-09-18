@extends('layouts.app')
@section('title', 'Edit User')

@section('content')
    <form action="{{ route('user.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Lengkap *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->name }}" required type="text" class="form-control" name="name"
                    placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Email *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->email }}" required type="email" class="form-control" name="email"
                    placeholder="Email">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Password *</label>
            </div>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
