<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Potential;
use App\Structure;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::orderBy('id', 'desc')->take(7)->get();
        $potentials = Potential::orderBy('id', 'desc')->take(7)->get();
        return view('pengunjung.home', compact('activities','potentials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kegiatan(){
      $activities = Activity::latest()->paginate(10);
      return view('pengunjung.kegiatan', compact('activities'));
    }

    public function struktur(){
      $structures = Structure::all();
      return view('pengunjung.struktur', compact('structures'));
    }

    public function artikelkegiatan($id){
      $activity = Activity::find($id);
      return view('pengunjung.artikelkegiatan', compact('activity'));
    }

    public function artikelpotensi($id){
      $potential = Potential::find($id);
      return view('pengunjung.artikelpotensi', compact('potential'));
    }
}
