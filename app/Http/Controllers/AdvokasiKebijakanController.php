<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvokasiKebijakan;
use Barryvdh\DomPDF\Facade\Pdf;

class AdvokasiKebijakanController extends Controller
{
    public function index()
    {
        $advokasiKebijakan = AdvokasiKebijakan::get();
        return view('admin-dashboard.pages.advokasi-kebijakan.index', compact('advokasiKebijakan'));
    }

    public function create()
    {
        return view('admin-dashboard.pages.advokasi-kebijakan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kebijakan_didukung' => 'required|max:255|string',
            'strategi_advokasi' => 'string',
            'pihak_terkait' => 'string'
        ]);

        AdvokasiKebijakan::create([
            'kebijakan_didukung' => $request->kebijakan_didukung,
            'strategi_advokasi' => $request->strategi_advokasi,
            'pihak_terkait' => $request->pihak_terkait,
        ]);

        return redirect('admin/advokasi-kebijakan')->with('status', 'Advokasi Kebijakan Berhasil Ditambahkan');
    }

    public function edit(int $id)
    {
        $advokasiKebijakan = AdvokasiKebijakan::findOrFail($id);
        return view('admin-dashboard.pages.advokasi-kebijakan.edit', compact('advokasiKebijakan'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'kebijakan_didukung' => 'required|max:255|string',
            'strategi_advokasi' => 'string',
            'pihak_terkait' => 'string'
        ]);

        AdvokasiKebijakan::findOrFail($id)->update([
            'kebijakan_didukung' => $request->kebijakan_didukung,
            'strategi_advokasi' => $request->strategi_advokasi,
            'pihak_terkait' => $request->pihak_terkait,
        ]);

        return redirect('admin/advokasi-kebijakan')->with('status', 'Advokasi Kebijakan Berhasil Diubah');
    }

    public function destroy(int $id)
    {
        $advokasiKebijakan = AdvokasiKebijakan::findOrFail($id);
        $advokasiKebijakan->delete();

        return redirect('admin/advokasi-kebijakan')->with('status', 'Advokasi Kebijakan Berhasil Dihapus');
    }

    public function print()
    {
        $advokasiKebijakan = AdvokasiKebijakan::get();
        $data = [
            'date' => date('m/d/Y'),
            'advokasiKebijakan' => $advokasiKebijakan
        ];

        $pdf = Pdf::loadView('admin-dashboard.pages.advokasi-kebijakan.print', $data);
        return $pdf->stream();
    }
}
