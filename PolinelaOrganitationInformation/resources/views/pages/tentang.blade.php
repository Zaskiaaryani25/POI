@extends('layouts.main')

@section('title', 'Tentang | POIN')

@section('content')
<div class="container">
    <h2 class="text-center fw-bold mb-5">Tentang</h2>

    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <div class="bg-secondary" style="width:100%;height:200px;border-radius:10px;"></div>
        </div>
        <div class="col-md-6">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
        </div>
    </div>

    <div class="row mb-4 align-items-center">
        <div class="col-md-6 order-md-2">
            <div class="bg-secondary" style="width:100%;height:200px;border-radius:10px;"></div>
        </div>
        <div class="col-md-6 order-md-1">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
        </div>
    </div>

    <p class="mt-4">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
    </p>
</div>
@endsection