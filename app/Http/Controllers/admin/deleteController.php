<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{

    // delete Categories 

    public function deleteCategories($id){
        $category = DB::table('categories')->where('id',$id)->first();
        if ($category) {
            // Xóa sản phẩm
            DB::table('categories')->where('id', $id)->delete();
            return redirect()->route('admin.categories.listCategories')->with('success', 'Categories deleted successfully.');
        } else {
            return redirect()->route('admin.categories.listCategories')->with('error', 'Categories not found.');
        }

    }
    //delete products
    public function deleteProduct($id) {
        // Tìm sản phẩm theo ID
        $product = DB::table('products')->where('id', $id)->first();
        
        if ($product) {
            // Xóa sản phẩm
            DB::table('products')->where('id', $id)->delete();
            return redirect()->route('admin.products.listProducts')->with('success', 'Product deleted successfully.');
        } else {
            return redirect()->route('admin.products.listProducts')->with('error', 'Product not found.');
        }
    }
}
