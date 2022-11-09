<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/projects_image', $filenameSimpan);
        }
        else {
            $filenameSimpan = 'noimage.jpg';
        }

        $project = new Projects;
        $project->picture = $filenameSimpan;
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
        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/projects_image', $filenameSimpan);
        }
        else {
            $filenameSimpan = 'noimage.jpg';
        }

        Projects::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'picture' => $filenameSimpan
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
        File::delete(public_path() . '/public/posts_image/' . $projects->picture);
        return redirect('projects')->with('success', 'Berhasil menghapus project');
    }

    public function __construct()
    {
    $this->middleware('auth', ["except" => ["index", "show"]]);
    }
}
