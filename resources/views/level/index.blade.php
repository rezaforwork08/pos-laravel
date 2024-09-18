@extends('layouts.app')
@section('title', 'Data Level')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('level.create') }}" class="btn btn-primary">Tambah</a>
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
                @foreach ($levels as $key => $level)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $level->level_name }}</td>
                        <td>
                            <a href="{{ route('level.edit', $level->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{ route('cat.destroy', $cat->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form class="d-inline" action="{{ route('level.destroy', $level->id) }}" method="post">
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
