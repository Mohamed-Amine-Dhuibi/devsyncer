<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectMember;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('projects.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'projectName' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'members' => 'array',
        ]);

        // Create the project
        $project = Project::create([
            'name' => $request->projectName,
            'description' => $request->description,
            'image' => $request->file('image')->store('project_images','public'),
        ]);
        $task = null ;
        $function=null;
        foreach ($request->members as $member) {
            if(isset($member["function"])){
                $function = $member["function"];
            }
            else if(isset($member["task_description"])){
                $task = $member["task_description"] ;
            }
            if($task!=null && $function!=null){
                $project->members()->create([
                    "function"=>$function,
                    "task_description"=> $task,
                ]);
                $task = null;
                $function = null;
            }
        }
        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    // Display the specified resource.
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Show the form for editing the specified resource.
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url'
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function join($memberid)
    {
        // Find the project member by ID
        $member = ProjectMember::find($memberid);

        // Check if the member exists
        if (!$member) {
            return redirect()->back()->with('error', 'Project member not found.');
        }

        // Check if the position is already occupied
        if ($member->user_id) {
            return redirect()->back()->with('error', 'This position is already filled.');
        }

        // Assign the logged-in user to this project position
        $member->update([
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'You have successfully joined the project.');
    }
}
