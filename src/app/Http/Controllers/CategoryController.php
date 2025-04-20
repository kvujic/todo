<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category', compact('categories'));
    }
    public function store(CategoryRequest $request) {
        $category = $request->only(['name']);
        Category::create($category);
        return redirect('/categories')->with('success', 'categoryを作成しました');
    }
    public function update(Request $request) {
        $category =$request->only(['name']);
        Category::find($request->id)->update($category);
        return redirect('/categories')->with('success', 'categoryを更新しました');
    }
    public function destroy (Request $request) {
        Category::find($request->id)->delete();
        return redirect('/categories')->with('success', 'categoryを削除しました');
    }
}
