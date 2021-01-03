<?php

namespace App\Http\Controllers;

use App\Repository\TaskRepository;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    private $taskRepository;
    public function __construct(TaskRepository $taskRepository)
    {
        $this->middleware('auth');
        $this->taskRepository = $taskRepository;
    }

    public function list(){
        $tasks = $this->taskRepository->getTasksOfCurrentUser();
        return view('tasks.list', compact('tasks'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function save(Request $request){

        $this->validate($request, [
            'name' => 'required|min:10|max:225',
            'description' => 'nullable|string',
            'end_time' => 'required'
        ]);

        $savedTask = $this->taskRepository->createTask($request->except('_token'));

        if($savedTask){
            return redirect('/list');
        }else{
            return view('404');
        }
    }

    public function edit($id){
        return view('tasks.edit',
            ['task' => $this->taskRepository->getTaskById($id)]);
    }


    public function delete($id){
        $this->taskRepository->deleteTaskById($id);
        return redirect()->back();
    }

}
