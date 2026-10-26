@extends('layouts.main')

@section('title', 'Dashboard – AgriVision Garut')

@section('content')
    <section class="hero">
        <h1>Selamat Datang di AgriVision Garut – Sistem Deteksi Hama Tanaman Berbasis Computer Vision</h1>
        <p>Catat hasil prediksi model EfficientNet-B0, ketahui status serangan hama, dan pantau riwayat serangan di lahan pertanian Kabupaten Garut.</p>
        <p>
            <a class="btn" href="{{ route('deteksi') }}">Mulai Input Deteksi</a>
            <a class="btn btn-outline" href="{{ route('riwayat') }}">Lihat Riwayat</a>
        </p>
    </section>

    <section class="cards">
        <div class="card">
            <h3>📷 Computer Vision</h3>
            <p>Model klasifikasi citra mengenali jenis hama dari foto daun tanaman beserta confidence score.</p>
        </div>
        <div class="card">
            <h3>📝 Pencatatan Digital</h3>
            <p>Hasil deteksi tersimpan di database sehingga mudah dipantau dan didokumentasikan.</p>
        </div>
        <div class="card">
            <h3>✅ Rekomendasi Otomatis</h3>
            <p>Status deteksi dan rekomendasi penanganan ditentukan dari nilai confidence score.</p>
        </div>
    </section>
@endsection