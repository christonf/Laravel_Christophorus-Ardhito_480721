<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "projects",
            'projects' => Projects::orderBy('created_at', 'desc')->paginate(6)
        );
        return view('projects.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Projects;
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->save();

        return redirect('projects')->with('success', 'Berhasil menambahkan project baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "projects",
            'projects' => Projects::find($id)
        );
        return view('projects.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "projects",
            'projects' => Projects::find($id)
        );
        return view('projects.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title'=>'required|min:2',
            'description'=>'required'
        ]);

        Projects::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('projects')->with('success', 'Perubahan berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projects::find($id);
        $projects->delete();
        return redirect('projects')->with('success', 'Berhasil menghapus project');
    }
}
