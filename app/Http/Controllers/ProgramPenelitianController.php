<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramPenelitian;
use Illuminate\Support\Facades\File;

class ProgramPenelitianController extends Controller
{
    public function index()
    {
        $programPenelitian = ProgramPenelitian::get();
        return view('admin-dashboard.pages.program-penelitian.index', compact('programPenelitian'));
    }

    public function create()
    {
        return view('admin-dashboard.pages.program-penelitian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'deskripsi' => 'required|max:255|string',
            'dokumentasi' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        if($request->has('dokumentasi'))
        {
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/program-penelitian/';
            $file->move($path, $filename);
        }

        ProgramPenelitian::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-penelitian')->with('status', 'Program Penelitian Berhasil Ditambahkan');
    }

    public function edit(int $id)
    {
        $programPenelitian = ProgramPenelitian::findOrFail($id);
        return view('admin-dashboard.pages.program-penelitian.edit', compact('programPenelitian'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'deskripsi' => 'required|max:255|string',
            'dokumentasi' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        $programPenelitian = ProgramPenelitian::findOrFail($id);
        if($request->has('dokumentasi'))
        {
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/program-penelitian/';
            $file->move($path, $filename);

            if(File::exists($programPenelitian->dokumentasi))
            {
                File::delete($programPenelitian->dokumentasi);
            }
        }

        $programPenelitian->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-penelitian')->with('status', 'Program Penelitian Berhasil Diubah');
    }

    public function destroy(int $id)
    {
        $programPenelitian = ProgramPenelitian::findOrFail($id);
        if(File::exists($programPenelitian->dokumentasi))
        {
            File::delete($programPenelitian->dokumentasi);
        }

        $programPenelitian->delete();

        return redirect('admin/program-penelitian')->with('status', 'Program Penelitian Berhasil Dihapus');
    }
}
