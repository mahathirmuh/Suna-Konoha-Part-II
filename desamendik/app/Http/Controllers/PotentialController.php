<?php

namespace App\Http\Controllers;

use App\Potential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class PotentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $photos_path;

     public function __construct(){
       $this->photos_path = public_path('/images-potensi');
     }

    public function index()
    {
        $potential = Potential::all();
        return view('admin.potensi.index', compact('potential'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.potensi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = $request->file('file');

        if(!is_array($photos)){
          $photos = [$photos];
        }

        if(!is_dir($this->photos_path)){
          mkdir($this->photos_path, 0777);
        }

        for($i = 0; $i < count($photos); $i++){
          $photo = $photos[$i];
          $name = sha1(date('YmdHis') . str_random(30));
          $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
        }

        Image::make($photo)
          ->resize(1000, 400, function($constraints){
            $constraints->aspectRatio();
          })
          ->save($this->photos_path . '/' . $resize_name);


        $potential = new Potential;
        $potential->title = $request->title;
        $potential->description = $request->description;
        $potential->thumbnail = $resize_name;
        $potential->save();

        return Response::json([
          'message' => 'Image saved Succesfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function show(Potential $potential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function edit(Potential $potential)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Potential $potential)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Potential $potential)
    {
        //
    }
}
