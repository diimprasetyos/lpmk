<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramWisataStudiBanding;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class ProgramWisataStudiBandingController extends Controller
{
    public function index()
    {
        $programWisataSB = ProgramWisataStudiBanding::get();
        return view('admin-dashboard.pages.program-wisata-sb.index', compact('programWisataSB'));
    }

    public function create()
    {
        return view('admin-dashboard.pages.program-wisata-sb.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'deskripsi' => 'required',
            'jenis' => 'required|max:255|string',
            'tanggal' => 'required|date',
            'dokumentasi' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        if($request->has('dokumentasi'))
        {
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/program-wisata-sb/';
            $file->move($path, $filename);
        }

        ProgramWisataStudiBanding::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-wisata-sb')->with('status', 'Program Wisaata/Studi Banding Berhasil Ditambahkan');
    }

    public function edit(int $id)
    {
        $programWisataSB = ProgramWisataStudiBanding::findOrFail($id);
        return view('admin-dashboard.pages.program-wisata-sb.edit', compact('programWisataSB'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'deskripsi' => 'required',
            'jenis' => 'required|max:255|string',
            'tanggal' => 'required|date',
            'dokumentasi' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        $programWisataSB = ProgramWisataStudiBanding::findOrFail($id);
        if($request->has('dokumentasi'))
        {
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/program-wisata-sb/';
            $file->move($path, $filename);

            if(File::exists($programWisataSB->dokumentasi))
            {
                File::delete($programWisataSB->dokumentasi);
            }
        }

        $programWisataSB->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
            'dokumentasi' => $path.$filename
        ]);

        return redirect('admin/program-wisata-sb')->with('status', 'Program Wisaata/Studi Banding Berhasil Diubah');
    }

    public function destroy(int $id)
    {
        $programWisataSB = ProgramWisataStudiBanding::findOrFail($id);
        if(File::exists($programWisataSB->dokumentasi))
        {
            File::delete($programWisataSB->dokumentasi);
        }

        $programWisataSB->delete();

        return redirect('admin/program-wisata-sb')->with('status', 'Program Wisaata/Studi Banding Berhasil Dihapus');
    }

    public function print()
    {
        $programWisataSB = ProgramWisataStudiBanding::get();
        $data = [
            'date' => date('m/d/Y'),
            'programWisataSB' => $programWisataSB
        ];

        $pdf = Pdf::loadView('admin-dashboard.pages.program-wisata-sb.print', $data);
        return $pdf->stream();
    }
}
