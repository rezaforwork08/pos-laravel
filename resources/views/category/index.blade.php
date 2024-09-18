@extends('layouts.app')
@section('title', 'Data Kategori')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1; @endphp
                @foreach ($categories as $key => $cat)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $cat->category_name }}</td>
                        <td>
                            <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{ route('cat.destroy', $cat->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form class="d-inline" action="{{ route('category.destroy', $cat->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
