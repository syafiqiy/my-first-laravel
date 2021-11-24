<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use File;
use Storage;

class ToDoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        //query list of todos from db
        $todos=ToDo::all();

        //$todos = Todo::all();
       //$todo = auth()->user();

        //dd($user);


        //$todos = $user->todos;

        // return to view - resources/views/todos/index.blade.php

        return view('todos.index',compact('todos')); //kalau folder (dot index (.index))



        //return to view
    }

    public function construct()
    {
        $this->middleware('auth');
    }

    public function create ()
    {
        //show create form
        return view ('todos.create'); //nak pergi mana
    }

    public function store (Request $request)
    {
        //store to todos table using miodel
        //return todos index

        $todo = new Todo();
        $todo->title=$request->title;
        //$todo->description=$request->description;
       // $todo->user_id = auth()->user()->id;
        $todo->save();

        if($request ->hasFile('attachment')){
            //rename
            $filename = $todo->id.'-'.date("Y-m-d").'.'.$request->attachment->getClientOriginalExtension();
 
            //store at file storage
            Storage::disk('public')->put($filename, File::get($request->attachment));

            //update rown on db
            $todo->attachment=$filename;
            $todo->save();

        }

        return redirect()->to('/todos');

    }

    public function show (Todo $todo)
    {
        return view ('todos.show', compact('todo'));
    }

    public function edit (Todo $todo)
    {
        return view ('todos.edit', compact('todo'));
    }

    public function update(Todo $todo, Request $request)
    {
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->to('/todos');
    }
    public function delete (Todo $todo)
    {
        $todo->delete();
        //return to todos index
        return redirect()->to('/todos')->with([
            'type'=>'alert-danger',
            'message'=>'Successfully delete your todo!'
        ]) ;
    }
}
