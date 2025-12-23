@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">
            <i class="bi bi-film"></i> Daftar Film
        </h5>
        <a href="{{ route('films.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Film
        </a>
    </div>

    <div class="card-body">
        @if($films->isEmpty())
            <div class="text-center text-muted py-4">
                <i class="bi bi-camera-reels fs-1"></i>
                <p class="mt-2">Belum ada data film</p>
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Sutradara</th>
                        <th>Tahun</th>
                        <th>Genre</th>
                        <th>Durasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($films as $film)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="fw-semibold">{{ $film->judul }}</td>
                        <td>{{ $film->sutradara }}</td>
                        <td>{{ $film->tahun_rilis }}</td>
                        <td>
                            <span class="badge bg-info text-dark">{{ $film->genre }}</span>
                        </td>
                        <td>{{ $film->durasi }} menit</td>
                        <td>
                            <a href="{{ route('films.edit', $film) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('films.destroy', $film) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus film ini?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
