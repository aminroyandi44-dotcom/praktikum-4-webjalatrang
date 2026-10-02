@extends('layouts.app')

@section('title', 'Tambah Berita')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm" style="border-radius:12px;overflow:hidden">
            <div class="card-header text-white fw-bold bg-desa">
                <i class="fas fa-plus-circle me-2"></i> Tambah Berita
            </div>
            <div class="card-body p-4">
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('berita._form')

                    <div class="d-flex gap-2 pt-3 border-top mt-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Simpan
                        </button>
                        <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
