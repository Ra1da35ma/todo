<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeTodo;
use App\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();

        return response([
            'error' => false,
            'data'  => compact('todos')
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param storeTodo $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodo $request)
    {

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->desc = $request->desc;

        $todo->save();

        return response([
            'error' => false,
            'data'  => compact('todo')
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo $todo
     *
     * @param            $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo, $id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return response([
            'error' => false,
            'data'  => 'Deleted Successfully!'
        ]);
    }
}
