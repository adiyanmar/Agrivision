@extends('layouts.main')

@section('title', 'Riwayat Deteksi – AgriVision Garut')

@section('content')
    <h1>Riwayat Deteksi Hama</h1>
    <p>Total data: <strong>{{ $riwayat->count() }}</strong></p>

    <div class="table-wrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lokasi</th>
                    <th>Tanaman</th>
                    <th>Jenis Hama</th>
                    <th>Confidence</th>
                    <th>Kerusakan Daun</th>
                    <th>Status</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->nama_tanaman }}</td>
                        <td>{{ $item->jenis_hama }}</td>
                        <td>{{ $item->confidence_score }}%</td>
                        <td>{{ $item->tingkat_kerusakan }}%</td>
                        <td>
                            @if ($item->status_deteksi == 'Tidak Pasti')
                                <span class="badge badge-gray">{{ $item->status_deteksi }}</span>
                            @elseif ($item->status_deteksi == 'Indikasi Hama')
                                <span class="badge badge-yellow">{{ $item->status_deteksi }}</span>
                            @else
                                <span class="badge badge-red">{{ $item->status_deteksi }}</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="center">Belum ada data deteksi.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection