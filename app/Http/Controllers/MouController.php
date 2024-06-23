<?php

namespace App\Http\Controllers;

use App\Models\Mou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MouController extends Controller
{
    public function index()
    {
        $MOU = Mou::get();
        return view('admin-dashboard.pages.mou.index', compact('MOU'));
    }

    public function create()
    {
        return view('admin-dashboard.pages.mou.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'nama_mitra' => 'required|max:255|string',
            'deskripsi' => 'required',
            'dokumen' => 'required|mimes:doc,docx,pdf'
        ]);

        if($request->has('dokumen'))
        {
            $file = $request->file('dokumen');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/mou/';
            $file->move($path, $filename);
        }

        Mou::create([
            'judul' => $request->judul,
            'nama_mitra' => $request->nama_mitra,
            'deskripsi' => $request->deskripsi,
            'dokumen' => $path.$filename
        ]);

        return redirect('admin/mou')->with('status', ['message' => 'MOU Berhasil Ditambahkan', 'type' => 'success']);
    }

    public function edit(int $id)
    {
        $MOU = Mou::findOrFail($id);
        return view('admin-dashboard.pages.mou.edit', compact('MOU'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'judul' => 'required|max:255|string',
            'nama_mitra' => 'required|max:255|string',
            'deskripsi' => 'required',
            'dokumen' => 'required|mimes:doc,docx,pdf'
        ]);

        $MOU = Mou::findOrFail($id);
        if($request->has('dokumen'))
        {
            $file = $request->file('dokumen');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/mou/';
            $file->move($path, $filename);

            if(File::exists($MOU->dokumen))
            {
                File::delete($MOU->dokumen);
            }
        }

        $MOU->update([
            'judul' => $request->judul,
            'nama_mitra' => $request->nama_mitra,
            'deskripsi' => $request->deskripsi,
            'dokumen' => $path.$filename
        ]);

        return redirect('admin/mou')->with('status', ['message' => 'MOU Berhasil Diubah', 'type' => 'info']);
    }

    public function destroy(int $id)
    {
        $MOU = Mou::findOrFail($id);
        if(File::exists($MOU->dokumen))
        {
            File::delete($MOU->dokumen);
        }

        $MOU->delete();

        return redirect('admin/mou')->with('status', ['message' => 'MOU Berhasil Dihapus', 'type' => 'danger']);
    }
}
