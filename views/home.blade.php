@extends('layout')

@section('content')
<div class="custom-card">
    <h4 class="text-primary fw-bold mb-3">LOREM IPSUM (Home)</h4>
    <p class="text-secondary">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempus, turpis nec id design lorem. 
        Lorem ipsum is a dummy text content for web design.
    </p>
    <button class="btn btn-secondary">Detail</button>
</div>

<div class="custom-card">
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset('images/image.jpg') }}" alt="Gambar Wisata" class="img-wisata">
            <small class="text-muted d-block mt-1">Gambar Wisata</small>
        </div>
        <div class="col-md-9">
            <h4 class="text-primary fw-bold">LOREM IPSUM</h4>
            <p class="text-secondary">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Null line. 
                Isi konten teks deskripsi tentang wisata atau gambar di samping.
            </p>
            <button class="btn btn-secondary">Detail</button>
        </div>
    </div>
</div>
@endsection