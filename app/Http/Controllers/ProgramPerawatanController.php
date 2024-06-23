<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ProgramPerawatan;
use Illuminate\Support\Facades\File;

class ProgramPerawatanController extends Controller
{
    public function index()
    {
        $programPerawatan = ProgramPerawatan::get();
        return view('admin-dashboard.pages.program-perawatan.index', compact('programPerawatan'));
    }

    public function create()
    {
        return view('admin-dashboard.pages.program-perawatan.create');
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

            $path = 'uploads/program-perawatan/';
            $file->move($path, $filename);
        }

        ProgramPerawatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-perawatan')->with('status', ['message' => 'Program Perawatan Berhasil Ditambahkan', 'type' => 'success']);
    }

    public function edit(int $id)
    {
        $programPerawatan = ProgramPerawatan::findOrFail($id);
        return view('admin-dashboard.pages.program-perawatan.edit', compact('programPerawatan'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'dokumentasi' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        $programPerawatan = ProgramPerawatan::findOrFail($id);
        if($request->has('dokumentasi'))
        {
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/program-perawatan/';
            $file->move($path, $filename);

            if(File::exists($programPerawatan->dokumentasi))
            {
                File::delete($programPerawatan->dokumentasi);
            }
        }

        $programPerawatan->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-perawatan')->with('status', ['message' => 'Program Perawatan Berhasil Diubah', 'type' => 'info']);
    }

    public function destroy(int $id)
    {
        $programPerawatan = ProgramPerawatan::findOrFail($id);
        if(File::exists($programPerawatan->dokumentasi))
        {
            File::delete($programPerawatan->dokumentasi);
        }

        $programPerawatan->delete();

        return redirect('admin/program-perawatan')->with('status', ['message' => 'Program Perawatan Berhasil Dihapus', 'type' => 'danger']);
    }

    public function print()
    {
        $programPerawatan = ProgramPerawatan::get();
        $data = [
            'date' => date('m/d/Y'),
            'programPerawatan' => $programPerawatan
        ];

        $pdf = Pdf::loadView('admin-dashboard.pages.program-perawatan.print', $data);
        return $pdf->stream();
    }
}
