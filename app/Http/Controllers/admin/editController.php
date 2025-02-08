<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editController extends Controller
{
    //
    public function editProducts($id)
    {
        // Lấy thông tin sản phẩm theo ID
        $product = DB::table('products')->where('id', $id)->first();

        if ($product) {
            return view('admin.products.editProducts', compact('product'));
        } else {
            return redirect()->route('admin.products.listProducts')->with('error', 'Product not found.');
        }
    }

    public function updateProducts(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $data['updated_at'] = now();

        DB::table('products')->where('id', $id)->update($data);

        return redirect()->route('admin.products.listProducts')->with('success', 'Product updated successfully.');
    }


    // edit categories
    public function editCategories($id)
    {
        // Lấy thông tin sản phẩm theo ID
        $category = DB::table('categories')->where('id', $id)->first();

        if ($category) {
            return view('admin.categories.editCategories', compact('category'));
        } else {
            return redirect()->route('admin.categories.listCategories')->with('error', 'Categories  not found.');
        }
    }
    // update categories
    public function updateCategories(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $data['updated_at'] = now();

        DB::table('categories')->where('id', $id)->update($data);

        return redirect()->route('admin.categories.listCategories')->with('success', 'Categories updated successfully.');
    }
    // 

}
