<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::when($request->name, function ($query, $value) {
            $query->where('name', 'LIKE', "%$value%")->orwhere('description', 'LIKE', "%$value%");
        })->when($request->parent_id, function ($query, $value) {
            $query->where('parent_id', '=', $value);
        })->get();
        $parents = Category::orderby('name', 'asc')->get();
        return view('admin.categories.index', ['categories' => $categories, 'parents' => $parents]);
    }
    public function create()
    {
        $parents = Category::orderby('name', 'asc')->get();
        $title = 'Add Category';
        $category = new Category();
        return view('admin.categories.create', compact('parents', 'title', 'category'));
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->post('parent_id', 1);
        $category->slug = Str::slug($request->name);
        $category->description = $request->input('description');
        $category->status = $request->post('status');
        session()->put('status', 'Category added (form status)!');
        session()->flash('success', 'Category added!');
        $category->save();
        return  redirect('admin/categories')->with('success', 'Category added!');
    }
    public function edit($id)
    {

        $category = Category::findOrFail($id);

        $parents = Category::orderby('name', 'asc')->get();

        return view('admin.categories.edit', [
            'id' => $id,
            'parents' => $parents,
            'category' => $category,
        ]);
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->parent_id = $request->post('parent_id');
        $category->slug = Str::slug($request->name);
        $category->description = $request->input('description');
        $category->status = $request->post('status');
        $category->save();
        return redirect('admin/categories')->with('sucess', 'Category updated');
    }
    public function destory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/categories')->with('success', 'Category deleted');
    }
}
