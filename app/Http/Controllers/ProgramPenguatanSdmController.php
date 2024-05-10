<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'deskripsi' => 'required|max:255|string',
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
            'deskripsi' => $request->deskripsi,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-penguatan-sdm')->with('status', 'Program Penguatan SDM Berhasil Ditambahkan');
    }

    public function edit(int $id)
    {
        $programPenguatanSDM = ProgramPenguatanSdm::findOrFail($id);
        return view('admin-dashboard.pages.program-penguatan-sdm.edit', compact('programPenguatanSDM'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'deskripsi' => 'required|max:255|string',
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
            'deskripsi' => $request->deskripsi,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-penguatan-sdm')->with('status', 'Program Penguatan SDM Berhasil Diubah');
    }

    public function destroy(int $id)
    {
        $programPenguatanSDM = ProgramPenguatanSdm::findOrFail($id);
        if(File::exists($programPenguatanSDM->dokumentasi))
        {
            File::delete($programPenguatanSDM->dokumentasi);
        }

        $programPenguatanSDM->delete();

        return redirect('admin/program-penguatan-sdm')->with('status', 'Program Penguatan SDM Berhasil Dihapus');
    }
}
