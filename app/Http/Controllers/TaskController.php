<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));

        return view('tasks.index');
    }
    function create()
    {
        return view('tasks.create');
    }
    function store(request $request)
    {
        // return view('tasks.store');
        $task = Task::create($request->all());
        return redirect()->route('tasks.index');
        dd($request->all());
    }
    function edit()
    {
        return view('tasks.edit');
    }
    function update()
    {
        return view('tasks.update');
    }
    function updateStatus()
    {
        return view('tasks.status');
    }
}
