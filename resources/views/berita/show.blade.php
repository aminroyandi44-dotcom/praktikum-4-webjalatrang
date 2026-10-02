@extends('layouts.app')

@section('title', $berita->judul)

@section('hero')
<div class="page-hero" style="padding:50px 0 30px">
    <div class="container text-white">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}" class="text-warning text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}" class="text-warning text-decoration-none">Berita</a></li>
                <li class="breadcrumb-item active text-white">Detail</li>
            </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="row g-4">
    <div class="col-lg-8">
        <article class="card border-0 shadow-sm" style="border-radius:14px;overflow:hidden">
            <img src="{{ $berita->gambar_url }}" class="card-img-top" style="height:380px;object-fit:cover" alt="{{ $berita->judul }}"
                 onerror="this.onerror=null;this.src='{{ asset('images/no_image.jpg') }}'">
            <div class="card-body p-4">
                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                    <span class="badge text-white bg-desa">{{ $berita->kategori }}</span>
                    <small class="text-muted"><i class="fas fa-calendar-alt me-1"></i>{{ $berita->tanggal->locale('id')->translatedFormat('l, j F Y') }}</small>
                    <small class="text-muted"><i class="fas fa-user me-1"></i>{{ $berita->penulis }}</small>
                    <small class="text-muted"><i class="fas fa-eye me-1"></i>{{ number_format($berita->dilihat) }} dibaca</small>
                </div>

                <h1 class="teko fw-bold mb-4" style="font-size:clamp(1.5rem,3vw,2.2rem);line-height:1.2">{{ $berita->judul }}</h1>

                <div class="article-body">
                    {!! strip_tags($berita->isi, '<p><br><em><strong><b><i><u><h2><h3><h4><ul><ol><li><blockquote>') !!}
                </div>

                @if ($berita->daftar_tag)
                    <div class="mt-4 pt-3 border-top">
                        <span class="fw-semibold text-muted small me-2"><i class="fas fa-tags me-1"></i>Tags:</span>
                        @foreach ($berita->daftar_tag as $tag)
                            <a href="{{ route('berita.index', ['q' => $tag]) }}" class="badge bg-light text-dark border me-1 text-decoration-none rounded-pill fw-normal mb-1">#{{ $tag }}</a>
                        @endforeach
                    </div>
                @endif

                <div class="mt-4 pt-3 border-top">
                    <span class="fw-semibold me-3 small">Bagikan:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm me-1" style="background:#1877f2;color:#fff"><i class="fab fa-facebook-f me-1"></i>Facebook</a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($berita->judul) }}" target="_blank" class="btn btn-sm me-1" style="background:#1da1f2;color:#fff"><i class="fab fa-twitter me-1"></i>Twitter</a>
                    <a href="https://wa.me/?text={{ urlencode($berita->judul.' '.url()->current()) }}" target="_blank" class="btn btn-sm me-1" style="background:#25d366;color:#fff"><i class="fab fa-whatsapp me-1"></i>WhatsApp</a>
                </div>
            </div>
        </article>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <a href="{{ route('berita.index') }}" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
            </a>
            <div class="d-flex gap-2">
                <a href="{{ route('berita.edit', $berita) }}" class="btn btn-outline-warning">
                    <i class="fas fa-edit me-1"></i>Edit
                </a>
                <form action="{{ route('berita.destroy', $berita) }}" method="POST" onsubmit="return confirm('Yakin hapus berita ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash me-1"></i>Hapus</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm sticky-top" style="top:80px;z-index:1;border-radius:12px;overflow:hidden">
            <div class="card-header text-white fw-bold bg-desa">
                <i class="fas fa-newspaper me-2"></i> Berita Terkait
            </div>
            <div class="card-body p-3">
                @forelse ($terkait as $lain)
                    <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                        <img src="{{ $lain->gambar_url }}" alt="{{ $lain->judul }}"
                             style="width:72px;height:56px;object-fit:cover;border-radius:6px;flex-shrink:0"
                             onerror="this.onerror=null;this.src='{{ asset('images/no_image.jpg') }}'">
                        <div>
                            <a href="{{ route('berita.show', $lain) }}" class="text-decoration-none text-dark fw-semibold" style="font-size:0.83rem;line-height:1.3">{{ Str::limit($lain->judul, 65) }}</a>
                            <div class="text-muted mt-1" style="font-size:0.75rem">
                                <i class="fas fa-calendar-alt me-1"></i>{{ $lain->tanggal->locale('id')->translatedFormat('j M Y') }}
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted small mb-0">Belum ada berita lain.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
