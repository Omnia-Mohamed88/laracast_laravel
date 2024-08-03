<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth; // Add this line



class JobController extends Controller
{
    // 
    public function index(){
        $jobs = Job::with('employer')->cursorPaginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => 2
        ]);

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        if (Auth::guest()) {
            return redirect('/login');
        }
    
        // Check if the employer exists and if the current user is not the job's employer
        if ($job->employer && $job->employer->user->isNot(Auth::user())) {
            abort(403); // Forbidden if the current user is not the job's employer
        }
    
        return view('jobs.edit', ['job' => $job]);
    }
    


    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update([
            'title' => $request->input('title'),
            'salary' => $request->input('salary')
        ]);

        return redirect("/jobs/{$job->id}");
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}