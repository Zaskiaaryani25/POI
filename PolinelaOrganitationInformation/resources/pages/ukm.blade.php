@extends('layouts.main')

@section('title', 'UKM | POIN')

@section('content')
<div class="container text-center">
    <h2 class="fw-bold mb-5">Unit Kegiatan Mahasiswa</h2>

    @php
        $ukms = [
            ['img' => 'ukm1.png', 'name' => 'Bidang Seni', 'link' => route('ukm.bidang-seni')],
            ['img' => 'ukm2.png', 'name' => 'Olahraga', 'link' => '#'],
            ['img' => 'ukm3.png', 'name' => 'Pecinta Alam', 'link' => '#'],
            ['img' => 'ukm4.png', 'name' => 'Musik', 'link' => '#'],
            ['img' => 'ukm5.png', 'name' => 'Jurnalistik', 'link' => '#'],
            ['img' => 'ukm6.png', 'name' => 'Robotik', 'link' => '#'],
            ['img' => 'ukm7.png', 'name' => 'Kewirausahaan', 'link' => '#'],
            ['img' => 'ukm8.png', 'name' => 'Tari', 'link' => '#'],
            ['img' => 'ukm9.png', 'name' => 'Teater', 'link' => '#'],
            ['img' => 'ukm10.png', 'name' => 'Fotografi', 'link' => '#'],
        ];
    @endphp

    <div class="row justify-content-center g-4">
        @foreach($ukms as $ukm)
            <div class="col-6 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm">
                    <a href="{{ $ukm['link'] }}" class="text-decoration-none">
                        <img src="{{ asset('images/'.$ukm['img']) }}" alt="{{ $ukm['name'] }}" class="img-fluid rounded mb-2">
                        <h6 class="fw-semibold text-dark">{{ $ukm['name'] }}</h6>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection