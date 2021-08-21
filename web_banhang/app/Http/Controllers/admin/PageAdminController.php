<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageAdminController extends Controller
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

    public function getProducts() {
        return view("admin.products.view_products");
    }

    public function editProducts() {
        return view("admin.products.edit_products");
    }

    public function addProducts() {
        return view("admin.products.add_products");
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
