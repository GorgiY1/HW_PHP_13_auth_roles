<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Task;

class TaskController extends Controller
{
    public function read() { //Request $request
        // $id = $request->input("id").'';
        // $tasks = [
        //     "1" => "Some information for task 1",
        //     "2" => "Some information for task 1",
        //     "3" => "Some information for task 1",
        //     "4" => "Some information for task 1",
        //     "5" => "Some information for task 1"
        // ];
        // $headers = [
        //     'Content-Type' => 'text/html'
        // ];
        // $status = 200;
        // $content = $tasks[$id];
        // $response = new Response($content, $status, $headers);
        // return $response;
        $tasks = Task::all();
        return view("tasks.read", compact('tasks'));
    }
    public function create() {
        return view("tasks.create");
    }
    public function assistant_create(Request $request) {
        $request->validate([
            'title'=> 'required|max:255',
            'description' => 'required|max:1024'
        ]);
        Task::create($request->all());
        return redirect()->route('task.read')->with('success','Task created successfully!');
    }
    public function edit($id) {
        $task = Task::findOrFail($id); // Находим задачу по id
        return view('tasks.edit', compact('task')); // Передаем данные задачи в представление
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1024',
        ]);
        $task = Task::findOrFail($id); // Находим задачу по id
        $task->update($request->all()); // Обновляем данные задачи
        return redirect()->route('task.read')->with('success', 'Task updated successfully!');
    }

    public function destroy($id) {
        Task::findOrFail($id)->delete(); // Удаляем задачу
        return redirect()->route('task.read')->with('success', 'Task deleted successfully!');
    }
}

