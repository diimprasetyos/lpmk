<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramAspirasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Models\DetailProgramAspirasi;

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
        $validatedData = $data->validate([
            'title' => 'required|string|max:255',
            'prioritas' => 'required|string|max:255',
            'rt' => 'required|string|max:255',
            'rw' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'perantara' => 'required|string|max:255',
        ]);
        
        DB::beginTransaction();
        try {
            $detail = new DetailProgramAspirasi();
            $detail->title = $validatedData['title'];
            $detail->prioritas = $validatedData['prioritas'];
            $detail->rt = $validatedData['rt'];
            $detail->rw = $validatedData['rw'];
            $detail->deskripsi = $validatedData['deskripsi'];
            $detail->save();

            $pa = new ProgramAspirasi();
            $pa->perantara = $validatedData['perantara'];
            $pa->status = 'Pending';
            $pa->detail_program_aspirasi_id = $detail->id;
            $pa->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw back()->withErrors(['msg' => 'Terjadi kesalahan: ' . $th->getMessage()]);
        }

        return redirect('admin/program-aspirasi')->with('status', ['message' => 'Program Aspirasi Berhasil Ditambahkan', 'type' => 'success']);
    }

    public function edit(int $id)
    {
        $programAspirasi = ProgramAspirasi::findOrFail($id);
        return view('admin-dashboard.pages.program-aspirasi.edit', compact('programAspirasi'));
    }

    public function update(Request $data, int $id)
    {
        $validatedData = $data->validate([
            'title' => 'required|string|max:255',
            'prioritas' => 'required|string|max:255',
            'rt' => 'required|string|max:255',
            'rw' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'perantara' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            $detail = DetailProgramAspirasi::findOrFail($id);
            $detail->title = $validatedData['title'];
            $detail->prioritas = $validatedData['prioritas'];
            $detail->rt = $validatedData['rt'];
            $detail->rw = $validatedData['rw'];
            $detail->deskripsi = $validatedData['deskripsi'];
            $detail->update();

            $pa = ProgramAspirasi::findOrFail($id);
            $pa->perantara = $validatedData['perantara'];
            $pa->status = $validatedData['status'];
            $pa->detail_program_aspirasi_id = $detail->id;
            $pa->update();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw back()->withErrors(['msg' => 'Terjadi kesalahan: ' . $th->getMessage()]);
        }

        return redirect('admin/program-aspirasi')->with('status', ['message' => 'Program Aspirasi Berhasil Diubah', 'type' => 'info']);
    }

    public function updateStatus(Request $request, int $id)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected,pending',
        ]);

        $programAspirasi = ProgramAspirasi::findOrFail($id);
        $programAspirasi->status = $request->input('status');
        $programAspirasi->save();

        return redirect()->back()->with('status', ['message' => 'Status berhasil diperbarui', 'type' => 'info']);
    }

    public function destroy(int $id)
    {
        $pa = ProgramAspirasi::findOrFail($id);
        $pa->delete();
        $detail = DetailProgramAspirasi::findOrFail($id);
        $detail->delete();

        return redirect('admin/program-aspirasi')->with('status', ['message' => 'Program Aspirasi Berhasil Dihapus', 'type' => 'danger']);
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
