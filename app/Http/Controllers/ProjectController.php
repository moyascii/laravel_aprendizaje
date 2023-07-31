<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
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
//        $projects = Project::latest()->paginate();
//        return view('portfolio', compact('projects'));

        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);


    }

    function show(Project $project)
    {


        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request){

//        Project::create([
//            'title' => request('title'),
//            'url' => request('url'),
//            'description' => request('description')
//        ]);

        //Creamos los fields primero
        //Podemos usar esta forma si no usamos el request
//        $fields = request() -> validate([
//            'title' => 'required',
//            'url' => 'required',
//            'description' => 'required',
//
//        ]);



        //enviamos los fields
        Project::create( $request->validated() );
        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request){
        $project->update( $request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito.');
    }

    public function destroy(Project $project){
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito.');
    }


}
