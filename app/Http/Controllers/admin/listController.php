<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function listCategories(){
        $categories = DB::table('categories')->get();
        return view('admin.categories.listCategories', compact('categories'));
    }
    public function listProducts(){
        $products = DB::table('products')->paginate(10);
        return view('admin.products.listProducts',['products'=> $products]);
    }


    // 
    public function listShowProducts($id) {
        // Tìm sản phẩm theo ID
        $product = DB::table('products')->where('id', $id)->first();
        
        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->route('admin.products.show')->with('error', 'Product not found');
        }
    
        // Trả về view và truyền dữ liệu sản phẩm
        return view('admin.products.show', ['product' => $product]);
    }
    
    
}
