@extends('layouts.main')

@section('title', 'Beranda | POI')

@section('content')

<!-- ====== Hero Section ====== -->
<div class="text-center mb-5">
    <img src="{{ asset('images/kampus.jpg') }}" alt="Kampus" class="img-fluid rounded shadow">
</div>

<!-- ====== Section Tentang ====== -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4 text-primary fw-bold">Tentang POI</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/kampus.jpg') }}" class="img-fluid rounded shadow" alt="Kampus">
            </div>
            <div class="col-md-6">
                <p class="fs-5 text-justify">
                    Politeknik Negeri Lampung (POLINELA) merupakan perguruan tinggi vokasi yang berfokus pada pengembangan sumber daya manusia di bidang pertanian, teknologi, dan bisnis.
                </p>
                <p class="fs-5 text-justify">
                    Dengan semangat inovasi dan kolaborasi, POLINELA terus berupaya menjadi pusat pendidikan tinggi terapan yang unggul dan berdaya saing nasional.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ====== Section Berita ====== -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-primary fw-bold">Berita Terbaru</h2>

        <div class="row g-4">
            @forelse($beritaTerbaru as $berita)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('storage/'.$berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $berita->judul }}</h5>
                            <p class="card-text text-truncate" style="max-height: 70px; overflow: hidden;">
                                {{ Str::limit(strip_tags($berita->isi), 100) }}
                            </p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Belum ada berita.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection