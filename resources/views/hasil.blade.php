@extends('layouts.main')

@section('title', 'Hasil Deteksi – AgriVision Garut')

@section('content')
    <h1>Hasil Deteksi Hama</h1>

    <table class="table">
        <tr><th>Lokasi Lahan</th><td>{{ $input['lokasi'] }}</td></tr>
        <tr><th>Nama Tanaman</th><td>{{ $input['nama_tanaman'] }}</td></tr>
        <tr><th>Jenis Hama</th><td>{{ $input['jenis_hama'] }}</td></tr>
        <tr><th>Confidence Score</th><td>{{ $input['confidence_score'] }}%</td></tr>
        <tr><th>Tingkat Kerusakan Daun</th><td>{{ $input['tingkat_kerusakan'] }}%</td></tr>
        <tr>
            <th>Status Deteksi</th>
            <td>
                @if ($status == 'Tidak Pasti')
                    <span class="badge badge-gray">⚠️ {{ $status }}</span>
                @elseif ($status == 'Indikasi Hama')
                    <span class="badge badge-yellow">🔍 {{ $status }}</span>
                @else
                    <span class="badge badge-red">🚨 {{ $status }}</span>
                @endif
            </td>
        </tr>
        <tr><th>Rekomendasi Penanganan</th><td>{{ $rekomendasi }}</td></tr>
    </table>

    <p>
        <a class="btn" href="{{ route('deteksi') }}">Input Lagi</a>
        <a class="btn btn-outline" href="{{ route('riwayat') }}">Lihat Riwayat</a>
    </p>
@endsection