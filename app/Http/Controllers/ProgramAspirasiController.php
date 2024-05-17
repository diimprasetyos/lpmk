<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProgramAspirasi;
use App\Models\DetailProgramAspirasi;
use Barryvdh\DomPDF\Facade\Pdf;

class ProgramAspirasiController extends Controller
{
    public function index()
    {
        $programAspirasi = ProgramAspirasi::get();
        return view('admin-dashboard.pages.program-aspirasi.index', compact('programAspirasi'));
    }

    public function create()
    {
        return view('admin-dashboard.pages.program-aspirasi.create');
    }

    public function store(Request $data)
    {
        DB::beginTransaction();
        try {
            $detail = new DetailProgramAspirasi();
            $detail->title = $data['title'];
            $detail->prioritas = $data['prioritas'];
            $detail->rt = $data['rt'];
            $detail->rw = $data['rw'];
            $detail->deskripsi = $data['deskripsi'];
            $detail->save();

            $pa = new ProgramAspirasi();
            $pa->perantara = $data['perantara'];
            $pa->status = 'Pending';
            $pa->detail_program_aspirasi_id = $detail->id;
            $pa->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th->getMessage();
        }

        return redirect('admin/program-aspirasi')->with('status', 'Program Aspirasi Berhasil Ditambahkan');
    }

    public function edit(int $id)
    {
        $programAspirasi = ProgramAspirasi::findOrFail($id);
        return view('admin-dashboard.pages.program-aspirasi.edit', compact('programAspirasi'));
    }

    public function update(Request $data, int $id)
    {
        DB::beginTransaction();
        try {
            $detail = DetailProgramAspirasi::findOrFail($id);
            $detail->title = $data['title'];
            $detail->prioritas = $data['prioritas'];
            $detail->rt = $data['rt'];
            $detail->rw = $data['rw'];
            $detail->deskripsi = $data['deskripsi'];
            $detail->update();

            $pa = ProgramAspirasi::findOrFail($id);
            $pa->perantara = $data['perantara'];
            $pa->status = 'Pending';
            $pa->detail_program_aspirasi_id = $detail->id;
            $pa->update();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th->getMessage();
        }

        return redirect('admin/program-aspirasi')->with('status', 'Program Aspirasi Berhasil Diubah');
    }

    public function destroy(int $id)
    {
        $pa = ProgramAspirasi::findOrFail($id);
        $pa->delete();
        $detail = DetailProgramAspirasi::findOrFail($id);
        $detail->delete();

        return redirect('admin/program-aspirasi')->with('status', 'Program Aspirasi Berhasil Dihapus');
    }

    public function print()
    {
        $programAspirasi = ProgramAspirasi::get();
        $data = [
            'date' => date('m/d/Y'),
            'programAspirasi' => $programAspirasi
        ];

        $pdf = Pdf::loadView('admin-dashboard.pages.program-aspirasi.print', $data);
        return $pdf->stream();
    }
}
