<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addController extends Controller
{
    public function test(){
        echo "test";
        die;
    }
    //add CATEGORIES 
    public function addCategoriesForm(){
        return view('admin.categories.addCategoriesForm');

    }
    public function addCategories(Request $request) {
       
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        DB::table('categories')->insert([
            'name' => $data['name'],
            'description' => $data['description'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // echo "die";
        // die;
        return redirect()->route('admin.categories.listCategories')->with('success', 'Category added successfully.');
    }





    //ADD PRODUCSTS 
    public function showAddForm(){
        $categories = DB::table('categories')->get();

        return view('admin.products.addform',compact('categories'));

    }
    public function addProducts(Request $request)
    {
        // Xác thực dữ liệu
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id', // Xác thực liên kết với bảng categories
        ]);

        // Xử lý việc tải lên hình ảnh (nếu có)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
            $data['image'] = $imagePath;
        }

        // Chèn dữ liệu vào bảng 'products'
        DB::table('products')->insert([
            'name' => $data['name'],
            'image' => $data['image'] ?? null, // Nếu không có hình ảnh thì để null
            'description' => $data['description'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'category_id' => $data['category_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Chuyển hướng sau khi thêm sản phẩm thành công
        return redirect()->route('admin.products.listProducts')->with('success', 'Product added successfully.');
    }
}
