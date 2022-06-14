<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }
    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/todos');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));
    }
}