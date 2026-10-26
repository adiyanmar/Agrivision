@extends('layouts.main')

@section('title', 'Tentang – AgriVision Garut')

@section('content')
    <h1>Tentang AgriVision Garut</h1>

    <h2>Tujuan Sistem</h2>
    <p>AgriVision Garut dikembangkan untuk membantu Kelompok Tani Makmur mempercepat penanganan serangan hama, mencatat hasil deteksi secara teratur, serta menyediakan riwayat serangan hama pada lahan pertanian.</p>

    <h2>Lokasi Deteksi</h2>
    <ul>
        <li>Kecamatan Garut Kota</li>
        <li>Kecamatan Tarogong Kaler</li>
        <li>Kecamatan Samarang</li>
    </ul>

    <h2>Parameter Hasil Deteksi yang Dicatat</h2>
    <ul>
        <li>Jenis hama</li>
        <li>Confidence score</li>
        <li>Tingkat kerusakan daun</li>
    </ul>

    <h2>Model Klasifikasi</h2>
    <p>Sistem memakai model klasifikasi citra <strong>EfficientNet-B0</strong> yang memprediksi jenis hama dari foto daun tanaman. Pada prototipe ini hasil prediksi dimasukkan secara manual oleh operator (simulasi).</p>
@endsection