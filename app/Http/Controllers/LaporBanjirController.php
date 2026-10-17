<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        return view('laporan.index', compact('laporan'));
    }
    public function create()
    {
        return view('laporan.create');
    }
    public function store(Request $request)
    {
        $data = Laporan::create([
            'nama_pelapor' => $request->input('nama_pelapor'),
            'lokasi' => $request->input('lokasi'),
            'tinggi_genangan' => $request->input('tinggi_genangan'),
            'tanggal_kejadian' => date('Y-m-d'),
        ]);
        return view('laporan.konfirmasi', compact('data'));
    }
}

