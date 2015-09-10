<?php

namespace Mitschool\Http\Controllers;

use Mitschool\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('task.index')->with('tasks', $tasks);
    }

    public function getAdd()
    {
        return view('task.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'task_title'    => 'required',
            'task_detail'   => 'required|min:10',
        ]);

        Task::create([
            'task_title' => $request->input('task_title'),
            'task_detail' => $request->input('task_detail'),
        ]);

        return redirect()
            ->route('tugas')
            ->with('info', 'Tugas Berhasil Ditambahkan');
    }

    public function getEdit($id)
    {

    }

    public function postEdit($id)
    {

    }
}