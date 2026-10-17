@extends('layouts.app')

@section('title', 'Buat Laporan')

@section('content')
    <h2>Form Lapor Kejadian Banjir</h2>

    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor:</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian (Kecamatan):</label>
            <input type="text" id="lokasi" name="lokasi" required placeholder="Contoh: Dayeuhkolot">
        </div>

        <div class="form-group">
            <label for="tinggi_genangan">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi_genangan" name="tinggi_genangan" required placeholder="Masukkan ketinggian air">
        </div>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
@endsection