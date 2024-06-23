<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ProgramPenguatanSdm;
use Illuminate\Support\Facades\File;

class ProgramPenguatanSdmController extends Controller
{
    public function index()
    {
        $programPenguatanSDM = ProgramPenguatanSdm::get();
        return view('admin-dashboard.pages.program-penguatan-sdm.index', compact('programPenguatanSDM'));
    }

    public function create()
    {
        return view('admin-dashboard.pages.program-penguatan-sdm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'dokumentasi' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        if($request->has('dokumentasi'))
        {
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/program-penguatan-sdm/';
            $file->move($path, $filename);
        }

        ProgramPenguatanSdm::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-penguatan-sdm')->with('status', ['message' => 'Program Penguatan SDM Berhasil Ditambahkan', 'type' => 'success']);
    }

    public function edit(int $id)
    {
        $programPenguatanSDM = ProgramPenguatanSdm::findOrFail($id);
        return view('admin-dashboard.pages.program-penguatan-sdm.edit', compact('programPenguatanSDM'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'dokumentasi' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        $programPenguatanSDM = ProgramPenguatanSdm::findOrFail($id);
        if($request->has('dokumentasi'))
        {
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/program-penguatan-sdm/';
            $file->move($path, $filename);

            if(File::exists($programPenguatanSDM->dokumentasi))
            {
                File::delete($programPenguatanSDM->dokumentasi);
            }
        }

        $programPenguatanSDM->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-penguatan-sdm')->with('status', ['message' => 'Program Penguatan SDM Berhasil Diubah', 'type' => 'info']);
    }

    public function destroy(int $id)
    {
        $programPenguatanSDM = ProgramPenguatanSdm::findOrFail($id);
        if(File::exists($programPenguatanSDM->dokumentasi))
        {
            File::delete($programPenguatanSDM->dokumentasi);
        }

        $programPenguatanSDM->delete();

        return redirect('admin/program-penguatan-sdm')->with('status', ['message' => 'Program Penguatan SDM Berhasil Dihapus', 'type' => 'danger']);
    }

    public function print()
    {
        $programPenguatanSDM = ProgramPenguatanSdm::get();
        $data = [
            'date' => date('m/d/Y'),
            'programPenguatanSDM' => $programPenguatanSDM
        ];

        $pdf = Pdf::loadView('admin-dashboard.pages.program-penguatan-sdm.print', $data);
        return $pdf->stream();
    }
}
