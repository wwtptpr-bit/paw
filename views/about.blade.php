@extends('layout')

@section('content')
<div class="custom-card text-center py-5">
    <h4 class="text-primary fw-bold text-start mb-5 ms-3">TENTANG SAYA (About Me)</h4>
    
    <div class="d-flex flex-column align-items-center">
        <div style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; border: 3px solid #ddd; margin-bottom: 20px;">
            <img src="{{ asset('images/image.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <p class="text-muted small">Foto Profil Dewangga Refastino</p>

        <h2 class="fw-bold text-dark">Dewangga Refastino</h2>
        <h5 class="text-muted">1462300037</h5>
        
        <p class="mt-3">
            Hii Saya mahasiswa dari universitas 17 Agustus 1945 Surabaya
        </p>
    </div>
</div>
@endsection