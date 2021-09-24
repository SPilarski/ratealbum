<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $id = Auth::id();

        $albums = Album::whereHas('users', function ($query) use ($id) {
            $query->where('id','=',$id);
        })->get();
        return view('mylist', compact('albums'));
    }
    public function store($id): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $idd = Auth::id();
        $album = Album::find($id);

        $album->users()->attach($idd);

    }

}
