<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\ProgramAspirasi;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $programaspirasi = ProgramAspirasi::count();
        $acceptedCount = DB::table('program_aspirasi')
            ->where('status', 'accepted')
            ->count();
        $rejectedCount = DB::table('program_aspirasi')
            ->where('status', 'rejected')
            ->count();
        return view('admin-dashboard.pages.home', ['acceptedCount' => $acceptedCount], compact('users', 'programaspirasi'));
    }
}
