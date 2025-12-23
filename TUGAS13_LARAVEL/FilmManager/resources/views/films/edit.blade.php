@extends('layouts.app')

@section('title', 'Edit Film')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header d-flex align-items-center">
                <i class="bi bi-pencil-square me-2 fs-5"></i>
                <h5 class="mb-0">Edit Data Film</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('films.update', $film) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Judul -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Judul Film</label>
                        <input type="text" name="judul"
                            class="form-control @error('judul') is-invalid @enderror"
                            value="{{ old('judul', $film->judul) }}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <!-- Sutradara -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Sutradara</label>
                            <input type="text" name="sutradara"
                                class="form-control @error('sutradara') is-invalid @enderror"
                                value="{{ old('sutradara', $film->sutradara) }}">
                            @error('sutradara')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tahun -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tahun Rilis</label>
                            <input type="number" name="tahun_rilis"
                                class="form-control @error('tahun_rilis') is-invalid @enderror"
                                value="{{ old('tahun_rilis', $film->tahun_rilis) }}">
                            @error('tahun_rilis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <!-- Genre -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Genre</label>
                            <input type="text" name="genre"
                                class="form-control @error('genre') is-invalid @enderror"
                                value="{{ old('genre', $film->genre) }}">
                            @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Durasi -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Durasi (menit)</label>
                            <input type="number" name="durasi"
                                class="form-control @error('durasi') is-invalid @enderror"
                                value="{{ old('durasi', $film->durasi) }}">
                            @error('durasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a href="{{ route('films.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i> Simpan Perubahan
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
