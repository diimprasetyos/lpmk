<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProgramAspirasi;
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
}
