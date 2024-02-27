<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('tasks.index');
    }
    function create()
    {
        return view('tasks.create');
    }
    function store()
    {
        return view('tasks.store');
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
