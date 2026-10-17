<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | LaporBanjir BPBD Bandung</title>
   <style>
    :root {
        --primary-grad: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        --bg-body: #f1f5f9;
        --surface: #ffffff;
        --text-dark: #0f172a;
        --text-muted: #64748b;
        --border-color: #cbd5e1;
        --border-dashed: #e2e8f0;
        --waspada-bg: #fef9c3; --waspada-text: #854d0e;
        --siaga-bg: #ffedd5;   --siaga-text: #c2410c;
        --awas-bg: #ffe4e6;    --awas-text: #be123c;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background-color: var(--bg-body);
        color: var(--text-dark);
        line-height: 1.6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    header {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: white;
    padding: 24px 20px 18px 20px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(37, 99, 235, 0.15);
    }

    .brand-logo {
        font-size: 1.6rem;
        font-weight: 800;
        letter-spacing: -0.5px;
    }

    .brand-desc {
        font-size: 0.88rem;
        opacity: 0.9;
        margin-top: 4px;
    }

    nav {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 16px;
    }
    nav a {
        color: #ffffff;
        text-decoration: none;
        padding: 9px 20px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.9rem;
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.2s ease;
    }

    nav a:hover {
        background: #ffffff;
        color: #1d4ed8;
        transform: translateY(-1px);
    }

    main {
        width: 95%;
        max-width: 1400px; 
        margin: 28px auto;
        padding: 28px;
        background: var(--surface);
        border-radius: 20px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        flex: 1;
    }

    h2 {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 20px;
    }

    .laporan-grid {
        display: grid;
        grid-template-columns:repeat(auto-fit, minmax(320px, 1fr))
        gap: 20px; /* Jarak antar kartu */
    }

    .card {
        background: #ffffff;
        border: 1.5px solid var(--border-color); /* Bingkai tegas setiap kartu */
        border-radius: 14px;
        padding: 20px;
        margin-bottom: 0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: all 0.2s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card:hover {
        border-color: #2563eb;
        box-shadow: 0 6px 16px rgba(37, 99, 235, 0.12);
        transform: translateY(-2px);
    }

    .card-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 12px;
    }

    .pelapor-nama {
        font-size: 1rem;
        font-weight: 700;
        color: var(--text-dark);
    }

    .pelapor-lokasi {
        font-size: 0.88rem;
        color: var(--text-muted);
        margin-top: 4px;
    }

    .card-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px dashed var(--border-dashed);
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .card-info span {
        color: var(--text-dark);
        font-weight: 600;
    }

    /* Status Badges */
    .badge {
        padding: 5px 12px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 0.75rem;
        display: inline-block;
        white-space: nowrap;
    }

    .bg-waspada { background: var(--waspada-bg); color: var(--waspada-text); }
    .bg-siaga { background: var(--siaga-bg); color: var(--siaga-text); }
    .bg-awas { background: var(--awas-bg); color: var(--awas-text); }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        font-size: 0.88rem;
        color: var(--text-dark);
    }

    .form-group input {
        width: 100%;
        padding: 12px 14px;
        font-family: inherit;
        font-size: 0.9rem;
        border: 1.5px solid var(--border-color);
        border-radius: 10px;
        background: #fafafa;
        transition: all 0.2s ease;
    }

    .form-group input:focus {
        outline: none;
        background: #fff;
        border-color: #2563eb;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }

    .btn {
        width: 100%;
        background: var(--primary-grad);
        color: white;
        font-family: inherit;
        font-weight: 700;
        font-size: 0.95rem;
        padding: 12px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        transition: all 0.2s ease;
    }

    .btn:hover {
        opacity: 0.95;
        transform: translateY(-1px);
    }

    footer {
        text-align: center;
        padding: 20px;
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-top: auto;
    }

    @media (max-width: 680px) {
        main {
            padding: 20px;
            margin: 16px auto;
        }
        .laporan-grid {
            grid-template-columns: 1fr; 
        }
    }
</style>

</head>
<body>

<header>
    <div class="brand-logo">LaporBanjir - BPBD Kabupaten Bandung</div>
    <div class="brand-desc">Portal Warga Cepat Tanggap Banjir</div>
    
    <nav>
        <a href="{{ route('lapor.index') }}">Daftar Laporan</a>
        <a href="{{ route('lapor.create') }}">Buat Laporan Baru</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2026 BPBD Kabupaten Bandung - Sistem Pelaporan Banjir Sederhana</p>
</footer>

</body>
</html>