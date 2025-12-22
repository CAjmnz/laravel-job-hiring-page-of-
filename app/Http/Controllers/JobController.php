<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;

class JobController extends Controller
{
    // List all jobs
    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    // Show job creation form
    public function create()
    {
        return view('jobs.create');
    }

    // Show a single job
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    // Store a new job
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'salary' => 'required|string',
        ]);
          $validated['employer_id'] = auth()->id();

        $job = Job::create($validated);

        Mail::to(auth()->user()->email)->queue(
            new JobPosted($job)
            
        );

        return redirect('/jobs')->with('success', 'Job created successfully!');

    }

    // Show edit form
public function edit(Job $job)
{
    return view('jobs.edit', compact('job'));
}


    // Update job
    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title'  => ['required', 'min:3'],
            'salary' => ['required', 'string'],
        ]);

        $job->update($validated);

        return redirect('/jobs/' . $job->id)->with('success', 'Job updated successfully!');
    }

    // Delete job
    public function destroy(Job $job)
    {
        Gate::authorize('edit-job', $job);
    
        $job->delete();

        return redirect('/jobs')->with('success', 'Job deleted successfully!');
    }
}

