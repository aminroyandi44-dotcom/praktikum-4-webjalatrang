<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Berita Desa') — Jalatrang</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/jalatrang.css') }}">
</head>
<body>
    @php
        $menus = [
            'Profil' => ['VISI', 'MISI', 'Sejarah', 'Struktural'],
            'Kependudukan' => [],
            'Berita' => [],
            'Potensi Wisata' => [],
            'IDM & SDGs' => ['IDM', 'SDGs'],
            'Ketahanan Pangan' => ['Statistik', 'Galeri', 'Top 10'],
            'Keuangan' => ['APBdes', 'PBB', 'Kegiatan'],
            'Download' => ['Regulasi', 'Materi'],
        ];

        $infoTerkini = [
            'Sekarang Anda dapat belanja langsung di Warung Desa yang merupakan Warung Online Masyarakat Desa Jalatrang.',
            'Kini Hadir Perpustakaan Desa Selaras dengan wajah baru dan manjamen yang lebih baik',
            'Warga bisa memeriksa langsung untuk memeriksa pembayaran PBB pada website',
            'Desa Jalatrang akan membuka layanan public untuk mempermudah akses informasi dan pelayanan masyarakat',
        ];
    @endphp

    <div class="topbar">
        <div class="container-fluid px-lg-4 px-3 d-flex align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-2 overflow-hidden" style="flex:1">
                <span class="topbar-badge text-nowrap"><i class="fas fa-bullhorn me-1"></i> INFO TERKINI</span>
                <div class="news-flash-wrapper">
                    <div class="news-flash-scroll">
                        @foreach ($infoTerkini as $info)
                            <span class="me-5 text-white-50"><i class="far fa-circle text-warning me-1" style="font-size:0.5rem"></i> {{ $info }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex align-items-center gap-3 text-nowrap text-white-50" style="font-size:0.75rem">
                <span><i class="far fa-clock text-warning me-1"></i> {{ now()->locale('id')->translatedFormat('l, j F Y') }}</span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-publik" id="mainNav">
        <div class="container-fluid px-lg-4 px-3">
            <a class="navbar-brand d-flex align-items-center gap-2 brand-box text-decoration-none me-2" href="{{ route('berita.index') }}">
                <img src="{{ asset('images/logo.png') }}" class="navbar-logo flex-shrink-0" alt="Logo Desa">
                <div class="brand-desa-text text-white overflow-hidden">
                    <div class="fw-bold teko text-truncate" style="font-size:1.35rem;line-height:1">PEMERINTAH DESA JALATRANG</div>
                    <div class="text-white-50 text-truncate d-none d-sm-block" style="font-size:0.65rem;letter-spacing:0.05em">KECAMATAN CIPAKU KABUPATEN CIAMIS</div>
                </div>
            </a>

            <div class="d-flex align-items-center gap-2 ms-auto order-lg-last">
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama" aria-controls="menuUtama" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="btn btn-top-layanan-grid ms-lg-2" type="button" title="Menu Layanan & Toko Desa">
                    <i class="bi bi-grid-3x3-gap-fill text-warning"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="menuUtama">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-home-pill" href="{{ route('berita.index') }}" title="Beranda">
                            <i class="fas fa-home"></i><span class="d-inline d-lg-none fw-bold ms-2">Beranda</span>
                        </a>
                    </li>
                    @foreach ($menus as $menu => $submenus)
                        @if ($submenus)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ $menu }}</a>
                                <ul class="dropdown-menu">
                                    @foreach ($submenus as $submenu)
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-chevron-right me-2 text-warning" style="font-size:0.65rem"></i> {{ $submenu }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a @class(['nav-link', 'active' => $menu === 'Berita'])
                                   href="{{ $menu === 'Berita' ? route('berita.index') : '#' }}">{{ $menu }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    @yield('hero')

    <div class="container my-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <footer class="footer-dark pt-5 pb-2 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('images/logo.png') }}" style="width:50px;height:50px;object-fit:contain" alt="Logo">
                        <div>
                            <div class="fw-bold text-white">PEMERINTAH DESA</div>
                            <div class="fw-bold text-warning" style="font-size:1.1rem">JALATRANG</div>
                        </div>
                    </div>
                    <p style="font-size:0.83rem;line-height:1.7">
                        Jalan Raya Cipaku Nomor 181<br>
                        Desa Jalatrang, Kecamatan Cipaku<br>
                        Kabupaten Ciamis<br>
                        <i class="fas fa-phone me-1"></i> 08<br>
                        <i class="fas fa-envelope me-1"></i> <a href="mailto:pemerintahdesajalatrang@gmail.com">pemerintahdesajalatrang@gmail.com</a>
                    </p>
                    <a href="https://www.google.com/maps/place/Jalatrang" target="_blank" class="btn btn-sm btn-outline-warning mt-1">
                        <i class="fas fa-map-marker-alt me-1"></i> Lihat Peta
                    </a>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="mb-3">Menu</h5>
                    <ul class="list-unstyled">
                        @foreach (['Beranda', 'Berita', 'Struktural', 'APBDes', 'Prestasi'] as $menu)
                            <li class="mb-1">
                                <a href="{{ $menu === 'Berita' ? route('berita.index') : '#' }}"><i class="bi bi-chevron-right me-1"></i>{{ $menu }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-6">
                    <h5 class="mb-3">Link Terkait</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1"><a href="https://kemendesa.go.id" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>Kemendesa</a></li>
                        <li class="mb-1"><a href="https://ciamis.go.id" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>Kab. Ciamis</a></li>
                        <li class="mb-1"><a href="https://jabar.go.id" target="_blank"><i class="bi bi-box-arrow-up-right me-1"></i>Pemprov Jabar</a></li>
                        <li class="mb-1"><a href="#"><i class="bi bi-shield-lock me-1"></i>Panel Admin</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="mb-3">Media Sosial</h5>
                    @foreach (['x' => 'twitter/x', 'facebook' => 'facebook', 'youtube' => 'youtube', 'instagram' => 'instagram'] as $ikon => $medsos)
                        <a href="#" class="d-flex align-items-center gap-2 mb-2">
                            <img src="{{ asset('images/medsos/'.$ikon.'.png') }}" style="width:22px;height:22px;object-fit:contain" alt="{{ $medsos }}">
                            {{ $medsos }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center mt-4 py-3">
            &copy; {{ date('Y') }} Pemerintah Desa Jalatrang — Semua hak dilindungi.
        </div>
    </footer>

    <button id="scrollTop" title="Ke atas"><i class="fas fa-chevron-up"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const tombolKeAtas = document.getElementById('scrollTop');
        window.addEventListener('scroll', () => tombolKeAtas.classList.toggle('visible', window.scrollY > 300));
        tombolKeAtas.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    </script>
</body>
</html>
