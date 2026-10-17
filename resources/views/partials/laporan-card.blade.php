<div class="card">
    <div class="card-top">
        <div>
            <div class="pelapor-nama">Pelapor: {{ $item->nama_pelapor }}</div>
            <div class="pelapor-lokasi">Lokasi: {{ $item->lokasi }}</div>
        </div>
        <div>
            @if($item->tinggi_genangan < 30)
                <span class="badge bg-waspada">Waspada</span>
            @elseif($item->tinggi_genangan >= 30 && $item->tinggi_genangan <= 70)
                <span class="badge bg-siaga">Siaga</span>
            @else
                <span class="badge bg-awas">Awas</span>
            @endif
        </div>
    </div>

    <div class="card-info">
        <div>Ketinggian Air: <span>{{ $item->tinggi_genangan }} cm</span></div>
        <div>Tanggal Kejadian: <span>{{ $item->tanggal_kejadian }}</span></div>
    </div>
</div>