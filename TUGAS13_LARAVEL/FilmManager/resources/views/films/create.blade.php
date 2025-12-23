@extends('layouts.app')

@section('title', 'Tambah Film')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5><i class="bi bi-plus-circle"></i> Tambah Film</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('films.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Judul Film</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Sutradara</label>
                            <input type="text" name="sutradara" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tahun Rilis</label>
                            <input type="number" name="tahun_rilis" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Genre</label>
                            <input type="text" name="genre" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Durasi (menit)</label>
                            <input type="number" name="durasi" class="form-control" required>
                        </div>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('films.index') }}" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
