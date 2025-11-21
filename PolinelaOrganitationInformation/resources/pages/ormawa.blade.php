@extends('layouts.main')

@section('title', 'Ormawa | POIN')

@section('content')
<div class="container text-center">
    <h2 class="fw-bold mb-5">Organisasi Mahasiswa</h2>

    <div class="row justify-content-center g-4">
        @foreach(['ormawa1.png','ormawa2.png','ormawa3.png','ormawa4.png','ormawa5.png'] as $img)
            <div class="col-6 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm">
                    <img src="{{ asset('images/'.$img) }}" alt="Ormawa" class="img-fluid rounded">
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection