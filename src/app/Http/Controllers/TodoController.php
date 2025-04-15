<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // データを表示
    public function index()
    {
        $todos = Todo::all();
        return view('index', compact('todos'));
    }
    //　データを追加
    public function store(TodoRequest $request)
    {
        $request->validate([
            'content' => 'required|string|max:20'
        ]);

        $todo = $request->only(['content']);
        Todo::create($todo);
        return redirect('/')->with(
            'success',
            'Todoを作成しました',
        );
    }
    // データの更新
    public function update(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::find($request->id)->update($todo);
        return redirect('/')->with('success', 'Todoを更新しました');
    }
    // データの削除
    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/')->with('success', 'Todoを削除しました');
    }
}
