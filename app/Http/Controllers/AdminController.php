<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{
    public function view_category(){

        $data = Category::all();
        return view('admin.category',compact('data'));

        // return view('admin.category');
    }

    // ----------------------------------------------------------------

    public function add_category(Request $request){
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        //5000 = 5seconds

        // toastr()->timeOut(5000)->closeButton()->addWarning('Category added successfully');
        // toastr()->timeOut(5000)->closeButton()->addInfo('Category added successfully');
        toastr()->timeOut(5000)->closeButton()->addSuccess('Category added successfully');

        return redirect()->back();
    }

    // ----------------------------------------------------------------

    public function delete_category($id){
        $data = Category::find($id);

        $data->delete();
        toastr()->timeOut(5000)->closeButton()->addSuccess('Category deleted successfully');

        return redirect()->back();
    }

    // ----------------------------------------------------------------

    public function edit_category($id){

        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));

        // return view('admin.edit_category');
    }

    // ----------------------------------------------------------------

    public function update_category(Request $request, $id){
        $data = Category::find($id);

        // category is the name here ->( <input type="text" name="category" value="{{ $data->category_name }}"> ) in resources\views\admin\edit_category.blade.php
        $data->category_name= $request->category;

        $data->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Category Updated successfully');

        return redirect('/view_category');
    }

    // ----------------------------------------------------------------

    public function add_product(){

        $category = Category::all();

        return view('admin.add_product',compact('category'));
    }

    // request $request because it is a POST method
    // ----------------------------------------------------------------

    public function upload_product(Request $request){
        $data = new Product;

        // $data->column_name in db = $request->name inside form in add_product.php  
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        $image = $request->image;
        if($image){
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products', $image_name);

            // follows same pattern as above 
            $data->image = $image_name;
        }

        $data->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Product Added successfully');

        return redirect()->back();
    }

    // ----------------------------------------------------------------

    public function view_product(){

        $product = Product::all();

        return view('admin.view_product',compact('product'));
    }

    // ----------------------------------------------------------------
}