<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\Skill;

class HomePageController extends Controller
{

    public function index()
    {
        // Dynamic Data to Home Page
        $projects = Project::paginate(3);
        $skills = Skill::all();
        return view('UsersPanel.HomePage', compact('projects','skills'));

    }


    // Skills User Page

    public function showSkillsChart() {
        $skills = Skill::all();
        return view('UsersPanel.Skills.show_skills_chart', compact('skills'));
    }


    public function detail($id)
    {
        $project = Project::find($id);
        return view('UsersPanel.showDetails', compact('project'));
    }


    // add search functioin

    public function search(Request $request){

       $query = $request->input('query');

       $searched_items = Project::where('title', 'like' , "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orderBy('title', 'desc')
            ->get();

        return view('UsersPanel.search_page', compact('searched_items'));
    }



}
