<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

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
        $type_products = TypeProduct::all();
        return view('admin.products.view_products',compact('products', 'brands', 'type_products'));
    }

    public function editProducts() {
        return view("admin.products.edit_products");
    }

    public function addProducts() {
        $brands = Brand::all();
        $type_products = TypeProduct::all();
        return view('admin.products.add_products',compact('brands', 'type_products'));
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
