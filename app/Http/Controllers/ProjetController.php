<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjetController extends Controller
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

        return view('projets.index', [
            'projets' => Project::latest()->paginate()
        ]);
    }

    function show(Project $project)
    {


        return view('projets.show', [
            'project' => $project
        ]);
    }

    public function create(){
        return view('projets.create');
    }

    public function store(){

//        Project::create([
//            'title' => request('title'),
//            'url' => request('url'),
//            'description' => request('description')
//        ]);
        Project::create(request()->all());
        return redirect()->route('projets.index');
    }
}
