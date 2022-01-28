<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::orderBy('name','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('tasks.list',compact('tasks'))->with('i',$value);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required','description' =>
            'required']);
        // create new task
        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Your task
added successfully!');
    }
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show',compact('task'));
    }
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        Task::find($id)->update($request->all());
        return redirect()->route('tasks.index')->with('success','Task updated
successfully');
    }
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->route('tasks.index')->with('success','Task
removed successfully');
    }
}

