<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRequest;
use App\Publicaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicaciones::get()->all();
        return view('admin.admin', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $imgPath = Storage::disk('localupload')
            ->putFile('storage', $request->file('photo'));

        $post = $request->all();
        $post['photo'] = '/uploads/' . $imgPath;

        $subir = Publicaciones::create($post);

        return redirect()->route('admin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicaciones::find($id);
        return view('admin.edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddRequest $request, $id)
    {

        $imgPath = Storage::disk('localupload')
            ->putFile('storage', $request->file('photo'));

        $post = $request->all();
        $post['photo'] = '/uploads/' . $imgPath;

        $subir = Publicaciones::create($post);

        $product = Publicaciones::find($id);
        $product->fill($request->all());
        $product->save();

        return redirect()->route('admin.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion = Publicaciones::find($id);
        $publicacion->delete();
            return redirect()->route('admin.index')->with('Success, Product delete successfully');
    }
}

