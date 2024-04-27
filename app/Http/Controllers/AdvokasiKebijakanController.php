<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\AdvokasiKebijakan;

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
            'strategi_advokasi' => 'nullable|string',
            'pihak_terkait' => 'nullable|string'
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
            'strategi_advokasi' => 'nullable|string',
            'pihak_terkait' => 'nullable|string'
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
            'title' => 'Data Advokasi Kebijakan',
            'date' => date('m/d/Y'),
            'advokasiKebijakan' => $advokasiKebijakan
        ];

        $pdf = Pdf::loadView('admin-dashboard.pages.advokasi-kebijakan.print', $data);
        return $pdf->stream();
    }
}
