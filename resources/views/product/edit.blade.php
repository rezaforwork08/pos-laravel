@extends('layouts.app')
@section('title', 'Edit Produk')

@section('content')
    <form action="{{ route('product.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori *</label>
            </div>
            <div class="col-sm-5">
                <select required name="category_id" id="" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option {{ $category->id == $edit->category_id ? 'selected' : '' }} value="{{ $category->id }}">
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Produk *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->product_name }}" required type="text" class="form-control" name="product_name"
                    placeholder="Nama Produk">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Qty *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->product_qty }}" required type="number" class="form-control" name="product_qty"
                    placeholder="Qty">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Harga *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{ $edit->product_price }}" required type="number" class="form-control" name="product_price"
                    placeholder="Harga">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
