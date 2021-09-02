<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        Todo::where('id', $request->id)->update(['content'=>$request->content]);
        return redirect('/');
    }
    public function remove(Request $request)
    {
        Todo::where('id',$request->id)->delete();
        return redirect('/');
    }
}
