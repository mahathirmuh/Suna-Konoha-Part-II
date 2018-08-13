<?php

namespace App\Http\Controllers;

use App\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $photos_path;

    public function __construct(){
      $this->photos_path = public_path('images-struktur');
    }

    public function index()
    {
        $structures = Structure::all();
        return view('admin.struktur-organisasi.index', compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.struktur-organisasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $photos = $request->file('photo');
        if(!is_array($photos)){
          $photos = [$photos];
        }

        if(!is_dir($this->photos_path)){
          mkdir($this->photos_path, 0777);
        }

        for($i = 0; $i < count($photos); $i++){
          $photo = $photos[$i];
          $name = sha1(date('YmdHis') . str_random(30));
          $new_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
        }

        Image::make($photo)
          ->resize(300, 400)
          ->save($this->photos_path . '/' . $new_name);

        $structure = new Structure;
        $structure->nama = $request->nama;
        $structure->jabatan = $request->jabatan;
        $structure->photo = $new_name;
        $structure->picture_title = "Foto " . $request->jabatan . $request->nama;
        $structure->save();

        return redirect('/admin/struktur-organisasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $structure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $structure = Structure::find($id);
        return view('admin.struktur-organisasi.edit', compact('structure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $structure = Structure::find($id);

        $photos = $request->file('photo');

        if(!empty($photos)){
          $gambar = $this->photos_path . '/' . $structure->photo;

          if(file_exists($gambar)){
            unlink($gambar);
          }

          if(!is_array($photos)){
            $photos = [$photos];
          }

          for($i = 0; $i < count($photos); $i++){
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $new_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
          }

          Image::make($photo)
            ->resize(300,400)
            ->save($this->photos_path . '/' . $new_name);
          $structure->photo = $new_name;
        }

        $structure->nama = $request->nama;
        $structure->jabatan = $request->jabatan;
        $structure->picture_title = "Foto " . $request->jabatan . $request->nama;
        $structure->save();

        return redirect('admin/struktur-organisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $structure = Structure::find($id);

        if(empty($structure)){
          return Response::json(['message'  => 'Maaf file tidak ada']);
        }

        $gambar = $this->photos_path . '/' . $structure->photo;

        if(file_exists($gambar)){
          unlink($gambar);
        }

        if(!empty($structure)){
          $structure->delete();
        }

        return redirect('admin/struktur-organisasi');
    }
}
