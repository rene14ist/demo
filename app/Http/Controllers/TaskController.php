<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index()
    {
        //
        $project = Proyectos::all();
        return view ('index')->with('project', $project);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Proyectos::create($input);
        return redirect('project')->with('flash_message', 'Data Agregada!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $project = Proyectos::find($id);
        return view('show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $project = Proyectos::find($id);
        return view('edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $project = Proyectos::find($id);
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
        Proyectos::destroy($id);
        return redirect('project')->with('flash_message', 'Registro Eliminado!');  
    }
}
