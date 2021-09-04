<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\Permission;
use App\Models\TypeProduct;
use App\Models\User;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\TypeProductRequest;
use Image;

class AdminController extends Controller
{
    public function login() {
        return view("admin.login.login");
    }

    public function getUsers() {
        $users = User::all();
        $roles = Role::all();
        return view("admin.users.view_users")->with(compact("users", "roles"));
    }

    public function editUsers($id) {
        $userDetails = User::where(['id'=>$id])->first();
        $roles = Role::all();
        $rolePermissions  = RolePermission::all();
        $permissions = Permission::all();
        return view("admin.users.edit_users")->with(compact("userDetails", "roles", "rolePermissions", "permissions"));;
    }

    public function addUsers() {
        $roles = Role::all();
        $rolePermissions  = RolePermission::all();
        $permissions = Permission::all();
        return view("admin.users.add_users")->with(compact("roles", "rolePermissions", "permissions"));
    }
    public function getPermissionByRole($id) {
        $data = Input::get('role');
        $rolePermissions  = RolePermission::where('role_id', $id)->first();
        return response()->json($rolePermissions);
    }

    public function viewTypeProducts() {
        $type_products = TypeProduct::all();
        return view("admin.type_products.view_type_products")->with(compact('type_products'));
    }

    public function editTypeProduct($id = null){
        $typeProductDetails = TypeProduct::where('id', $id)->first();
        if (!$typeProductDetails){
            return back()->with('error', 'Dữ liệu đầu vào không hợp lệ \n Vui lòng kiểm tra lại');
        }
        return view('admin.type_products.edit_type_products')->with(compact('typeProductDetails'));
    }
    public function updateTypeProduct(TypeProductRequest $request, $id){
//        dd($request);
        $data = array_filter($request->only('name', 'description'));
        if(TypeProduct::where('id',$id)->update($data)){
            return back()->with('success', 'Thông tin đã được lưu lại');
        }
        else{
            return back()->with('error', 'Đã có lỗi xảy ra, xin vui lòng thử lại');
        }

    }




    public function addTypeProducts() {
        return view("admin.type_products.add_type_products");
    }
    public function insertTypeProducts(TypeProductRequest $request){
        $data = $request->all();
        $typeProduct = new TypeProduct;
        $typeProduct->name = $data['name'];
        $typeProduct->description = $data['description'];
        if( $typeProduct->save()){
            return back()->with('success', 'Brand has been added successfully');
        }
        else{
            return back()->with('error', 'Couldnt add a new brand');
        }
    }

    public function deleteTypeProduct($id){
        if(TypeProduct::where(['id'=>$id])->delete()){
            return back()->with('info', 'Yêu cầu đã được thực hiện');
        }
        else return back()->with('error', 'Đã có lỗi xảy ra, vui lòng thực hiện lại');
    }






    public function viewProducts() {
        $products = Product::all();
        $brands = Brand::all();
        $type_products = TypeProduct::get();
        return view('admin.products.view_products')->with(compact('products', 'brands', 'type_products'));
    }

    public function editProducts($id) {
        $product = Product::where('id', $id)->first();
        $file_img_name = $product->image;
//        $image_path = 'images/products/'.$file_img_name;
//        dd($file_img_name);
        $brands = Brand::all();
        $type_products = TypeProduct::all();
        return view("admin.products.edit_products")->with(compact('product', 'brands', 'type_products'));
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

    public function updateProducts(ProductRequest $request, $id = null){
//        dd($request);
        $data = array_filter($request->only('brand_id', 'type_id', 'name', 'win', 'cpu', 'manHinh', 'ram',
            'oCung', 'unit_price', 'promotion_price', 'description'));
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = time().rand(10,99).'.'.$extension;
                $data['image']  =$filename;
                $image_path = 'images/products/'.$filename;
                if(!Image::make($image_tmp)->save($image_path)){
                    return back()->with('error', 'Something was wrong with image');
                }
                // Store image name in products table
            }
//            dd($data);
            if(Product::where('id', $id)->update($data)){
                return redirect()->back()->with('success', 'Product info has been updated');
            }
            else{
                return redirect()->back()->with('failed','Cannot update product info');
            }

        }
    }

    public function deleteProducts($id = null){
        if(Product::where(['id'=>$id])->delete()){

            return back()->with('info', 'Product has been deleted');
        }
        else{
            return back()->with('failed', 'Couldnt delete the product');
        }
    }


    public function viewBrands() {
        $brands = Brand::all();
        return view("admin.brands.view_brands")->with(compact('brands'));
    }

    public function addBrands() {
        return view("admin.brands.add_brands");
    }

    public function insertBrands(BrandRequest $request){
        $data = $request->all();
        $brand = new Brand;
        $brand->name = $data['name'];
        $brand->description = $data['description'];
        if($request->hasFile('image_logo')){
            $image_tmp = $request->file('image_logo');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = time().rand(10,99).'.'.$extension;
                $image_path = 'images/Users-logo/'.$filename;
                if(!Image::make($image_tmp)->save($image_path)){
                    return back()->with('error', 'Something was wrong with image');
                }
                // Store image name in products table
                $brand->image_logo = $filename;
            }
        }
        if( $brand->save()){
            return back()->with('success', 'Brand has been added successfully');
        }
        else{
            return back()->with('error', 'Couldnt add a new brand');
        }
    }

    public function deleteBrands($id){
        if(Brand::where(['id'=>$id])->delete()){
            return back()->with('info', 'Brand has been removed');
        }
        else return back()->with('error', 'Please try again');
    }
    public function editBrands($id = null){
        $brandDetails = Brand::where('id', $id)->first();
        if (!$brandDetails){
            return back()->with('error', 'Cannot find the specific brand');
        }
        return view('admin.brands.edit_brands')->with(compact('brandDetails'));
    }
    public function updateBrands(BrandRequest $request, $id){
//        dd($request);
        $data = array_filter($request->only('name', 'description'));
        if($request->hasFile('image_logo')) {
            $image_tmp = $request->file('image_logo');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = time() . rand(10, 99) . '.' . $extension;
                $data['image_logo'] = $filename;
                $image_path = 'images/brands-logo/' . $filename;
                if (!Image::make($image_tmp)->save($image_path)) {
                    return back()->with('error', 'Something was wrong with image');
                }
                // Store image name in Users table
            }
        }
        if(Brand::where('id',$id)->update($data)){
            return back()->with('success', 'Brand info has been edited');
        }
        else{
            return back()->with('error', 'Couldnt delete the brand');
        }

    }

    public function getBills() {
        $bills = Bill::all();
        $bill_details  = BillDetail::all();
        $customers = Customer::all();
        $products = Product::all();
        return view("admin.bills.view_bills")->with(compact('bills', 'bill_details', 'customers', 'products'));
    }
}
