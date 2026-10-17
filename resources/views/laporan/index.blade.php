@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir Terkini</h2>

    <div class="laporan-grid">
        @forelse($laporan as $item)
            @include('partials.laporan-card', ['item' => $item])
        @empty
            <p style="grid-column: 1 / -1;">Belum ada laporan kejadian banjir saat ini.</p>
        @endforelse
    </div>
@endsection