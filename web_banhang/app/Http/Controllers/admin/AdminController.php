<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Image;

class AdminController extends Controller
{
    public function login() {
        return view("admin.login.login");
    }

    public function getUsers() {
        return view("admin.users.view_users");
    }

    public function editUsers() {
        return view("admin.users.edit_users");
    }

    public function addUsers() {
        return view("admin.users.add_users");
    }

    public function getTypeProducts() {
        return view("admin.type_products.view_type_products");
    }

    public function editTypeProducts() {
        return view("admin.type_products.edit_type_products");
    }

    public function addTypeProducts() {
        return view("admin.type_products.add_type_products");
    }

    public function viewProducts() {
        $products = Product::all();
        $brands = Brand::all();
        $type_products = TypeProduct::get();
        return view('admin.products.view_products')->with(compact('products', 'brands', 'type_products'));
    }

    public function editProducts() {
        return view("admin.products.edit_products");
    }

    public function addProducts() {
        $brands = Brand::all();
        $type_products = TypeProduct::all();
        return view("admin.products.add_products")->with(compact('brands', 'type_products'));
    }

    public function insertProducts(ProductRequest $request){
        $data = $request->all();
        $product = new Product;
        $product->name = $data['product_name'];
        $product->unit_price = $data['unit_price'];
        $product->promotion_price = $data['promotion_price'];
        $product->description = $data['description'];
        $product->cpu = $data['cpu'];
        $product->ram = $data['ram'];
        $product->oCung = $data['hard_drive'];
        $product->win = $data['system'];
        $product->manHinh = $data['screen'];
        $product->brand_id = $data['brand'];
        $product->type_id = $data['type_product'];
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = time().rand(10,99).'.'.$extension;
                $image_path = 'images/products/'.$filename;
                if(!Image::make($image_tmp)->save($image_path)){
                    return back()->with('error', 'Something was wrong with image');
                }
                // Store image name in products table
                $product->image = $filename;
            }
        }
        if($product->save()){
            return redirect()->back()->with('success', 'Product has been added!');
        }
        else return redirect()->back()->with('failed', 'Coudnt add a new product, please try agian');
    }

    public function getBrands() {
        return view("admin.brands.view_brands");
    }

    public function addBrands() {
        return view("admin.brands.add_brands");
    }

    public function editBrands() {
        return view("admin.brands.edit_brands");
    }

    public function getBills() {
        return view("admin.bills.view_bills");
    }
}
