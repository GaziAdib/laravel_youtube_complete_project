<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class AdminSkillController extends Controller
{

    public function index()
    {
        $skills = Skill::all();
        return view('AdminSkills.index', compact('skills'));
    }


    public function create()
    {
        // to get create page
        return view('AdminSkills.create_skill');
    }


    public function store(Request $request)
    {
        // to store all data from create page

        $this->validate($request, [
            'technology' => 'required',
            'score' => 'required',
        ]);

        $skill = new Skill;
        $skill->technology = $request->technology;
        $skill->score = $request->score;

        $skill->save();

        return redirect()->route('admin.skills.create')->with('success', 'Skills Created Successfully!');

    }



    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill deleted Successfully!');
    }
}
