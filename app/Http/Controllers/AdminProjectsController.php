<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class AdminProjectsController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('AdminProject.index', compact('projects'));
    }


    public function create()
    {

        $categories = Category::all();

        return view('AdminProject.create_project', compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'thumbnail' => 'required',
            'description' => 'required',
            'github_link' => 'required',
            'youtube_link' => 'required',
            'skills' => 'required',
            'category_id' => 'required'
        ]);

        $project = new Project;

        // Image Upload

        if($file = $request->file('thumbnail')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $project->thumbnail = $name;
        }

        //others fields

        $project->title = $request->title;
        $project->description = $request->description;
        $project->github_link = $request->github_link;
        $project->youtube_link = $request->youtube_link;
        $project->skills = $request->skills;
        $project->category_id = $request->category_id;

        $project->save();

        return redirect()->route('admin.projects.create')->with('success', 'Project Created Successfully!');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $project = Project::find($id);
        $categories = Category::all();
        return view('AdminProject.edit_project', compact('project','categories'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'github_link' => 'required',
            'youtube_link' => 'required',
            'skills' => 'required',
            'category_id' => 'required'
        ]);

        $project = Project::find($id);

        if($file = $request->file('thumbnail')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $project->thumbnail = $name;
        }

        $project->title = $request->title;
        $project->description = $request->description;
        $project->github_link = $request->github_link;
        $project->youtube_link = $request->youtube_link;
        $project->skills = $request->skills;
        $project->category_id = $request->category_id;

        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project Updated Successfully!');

    }


    public function destroy($id)
    {
        $project = Project::find($id);
        @unlink(public_path($project->thumbnail));
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project Updated Successfully!');

    }
}
