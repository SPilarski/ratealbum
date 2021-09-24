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

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request) : View|JsonResponse
    {
        $filters = $request->query('filter');
        $query = Album::query();
        if(!is_null($filters)){
            $query = $query->where('genre', '=', $filters['genre']);


            return response()->json([
                'data' => $query->get()
            ]);
        }



        return  view("home", [
            'albums' => Album::paginate(6)
        ]);
    }


}
