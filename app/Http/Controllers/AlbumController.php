<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\UserAlbum;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : View
    {
        return  view("index", [
            'albums' => Album::paginate(8)
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() : View
    {
        return  view("albums.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $album = new Album($request -> all());
        $album->image_path=  $request->file('image')->store('albums');
        $album->save();
        return redirect(route('index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Album $album
     * @return View
     */
    public function edit(Album $album): View
    {
        return  view("albums.edit", [
            'albums' => $album
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param   Album $album
     * @return RedirectResponse
     */
    public function update(Request $request, Album $album) : RedirectResponse
    {
        $album -> fill($request->all());
        if($request->hasFile('image')) {
            $album->image_path = $request->file('image')->store('albums');
        }
        $album->save();
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Album::find($id);

        $flight ->delete();
        return response()->json([
            'status'=>'success'
        ]);


    }
}
