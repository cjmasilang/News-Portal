<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // List Categories
    public function index(){
        Session::put('admin_page', 'category');
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    // Add Categories
    public function add(){
        Session::put('admin_page', 'category');
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.category.add', compact('categories'));
    }

    // Store Category
    public function store(Request $request){
        $data = $request->all();
        $validateData = $request->validate([
            'category_name' => 'required|max:255',
            'parent_id' => 'required',
            'description' => 'required'
        ]);
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->slug = Str::slug($data['category_name']);
        $category->description = $data['description'];
        $category->parent_id = $data['parent_id'];
        if(!empty($data['status'])){
            $category->status = 1;
        } else {
            $category->status = 0;
        }
        $category->save();
        Session::flash('success_message', 'Category Has Been Added Successfully');
        return redirect()->back();
    }

    // Edit Category
    public function edit($id){
        Session::put('admin_page', 'category');
        $category = Category::findOrFail($id);
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.category.edit', compact('category', 'categories'));
    }

    // Update Category
    public function update(Request $request, $id){
        $data = $request->all();
        $category = Category::findOrFail($id);
        $validateData = $request->validate([
            'category_name' => 'required|max:255',
            'parent_id' => 'required',
            'description' => 'required'
        ]);
        $category->category_name = $data['category_name'];
        $category->slug = Str::slug($data['category_name']);
        $category->description = $data['description'];
        $category->parent_id = $data['parent_id'];
        if(!empty($data['status'])){
            $category->status = 1;
        } else {
            $category->status = 0;
        }
        $category->save();
        Session::flash('success_message', 'Category Has Been Updated Successfully');
        return redirect()->back();
    }

    // Delete Category
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        DB::table('categories')->where('parent_id', $id)->delete();
        DB::table('news')->where('category_id', $id)->delete();
        Session::flash('success_message', 'Category Has Been Deleted Successfully');
        return redirect()->back();
    }
}
