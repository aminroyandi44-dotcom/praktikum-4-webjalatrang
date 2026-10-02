@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm" style="border-radius:12px;overflow:hidden">
            <div class="card-header text-white fw-bold bg-desa">
                <i class="fas fa-edit me-2"></i> Edit Berita
            </div>
            <div class="card-body p-4">
                <form action="{{ route('berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('berita._form')

                    <div class="mb-3">
                        <small class="text-muted">
                            <i class="fas fa-eye"></i> Dilihat {{ number_format($berita->dilihat) }} kali •
                            Terakhir diubah {{ $berita->updated_at->diffForHumans() }}
                        </small>
                    </div>

                    <div class="d-flex gap-2 pt-3 border-top mt-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update
                        </button>
                        <a href="{{ route('berita.show', $berita) }}" class="btn btn-outline-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
