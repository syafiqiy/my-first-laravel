<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index ()
    {
    //query list of todos from db
    $user=User::all();

    return view('user.index',compact('user')); //kalau folder (dot index (.index))
    }

        public function create ()
        {
            //show create form
            return view ('user.create'); //nak pergi mana
        }
    
        public function store (Request $request)
        {
            //store to todos table using miodel
            //return todos index
    
            $user = new User();
            $user->title=$request->title;
            $user->description=$request->description;
            $user->save();
    
            return redirect()->to('/user');
    
        }
    
        public function show (User $user)
        {
            return view ('user.show', compact('user')); //
        }
    
        public function edit (Todo $todo)
        {
            return view ('user.edit', compact('user')); //check balik
        }
    
        public function update(User $user, Request $request)
        {
            $user->title = $request->title;
            $user->description = $request->description;
            $user->save();
    
            return redirect()->to('/user');
        }
        public function delete (User $user)
        {
            $user->delete();
            return redirect()->to('/user'); 
        }

}
