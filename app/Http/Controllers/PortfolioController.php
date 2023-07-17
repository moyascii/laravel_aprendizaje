<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //$portfolio = DB::table('projects')->get();
//        $portfolio = Project::orderBy('created_at', 'DESC')->get();
//        $portfolio = Project::latest()->get();
//        $portfolio = Project::latest()->get();
//        $projets = Project::latest()->paginate();
//        return view('portfolio', compact('projets'));

        return view('portfolio', [
            'projets' => Project::latest()->paginate()
        ]);
    }

    function show($id)
    {


        return view('projets.show', [
            'project' => Project::findOrFail($id)
        ]);
    }
}
