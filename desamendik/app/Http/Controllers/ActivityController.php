<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $photos_path;

     public function __construct(){
       $this->photos_path = public_path('/images-kegiatan-desa');
     }

    public function index()
    {
        $activity = Activity::latest()->get();
        return view('admin.kegiatan-desa.index', compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kegiatan-desa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = $request->file('thumbnail');

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
          ->resize(1000, 380)
          ->save($this->photos_path . '/' . $new_name);

        $activity = new Activity;
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->picture_title = "Gambar " . $request->title;
        $activity->thumbnail = $new_name;
        $activity->save();

        return redirect('admin/kegiatan-desa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);
        return view('admin.kegiatan-desa.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('admin.kegiatan-desa.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $activity = Activity::find($id);
        $photos = $request->file('thumbnail');

        if(!empty($photos)){

          $gambar = $this->photos_path . '/' . $activity->thumbnail;
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
            ->resize(1000,380)
            ->save($this->photos_path . '/' . $new_name);

          $activity->thumbnail = $new_name;
        }

        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->picture_title = "Gambar " . $request->title;
        $activity->save();

        return redirect("admin/kegiatan-desa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);

        if(empty($activity)){
            return Response::json(['message' => 'Maaf file tidak ada!']);
        }

        $gambar = $this->photos_path . '/' . $activity->thumbnail;

        if(file_exists($gambar)){
          unlink($gambar);
        }

        if(!empty($activity)){
          $activity->delete();
        }

        return redirect('admin/kegiatan-desa');
    }
}
