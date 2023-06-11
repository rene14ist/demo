<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $project = Project::all();
        return view ('project.index')->with('project', $project);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Project::create($input);
        return redirect('project')->with('flash_message', 'Data Agregada!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $project = Project::find($id);
        return view('project.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $project = Project::find($id);
        return view('project.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $project = Project::find($id);
        $input = $request->all();
        $project->update($input);
        return redirect('project')->with('flash_message', 'Registro actualizado!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Project::destroy($id);
        return redirect('project')->with('flash_message', 'Registro Eliminado!');  
    }
}
