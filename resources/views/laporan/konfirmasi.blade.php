@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success" message="Laporan kejadian banjir Anda berhasil dikirim dan dicatat oleh sistem!" />

    <h2>Rincian Laporan yang Dikirim</h2>
    
    @include('partials.laporan-card', ['item' => $data])

    <div style="margin-top: 20px;">
        <a href="{{ route('lapor.index') }}" style="color: #2563eb; text-decoration: none; font-weight: 600;">
            &larr; Kembali ke Daftar Laporan
        </a>
    </div>
@endsection