<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Vendore;

class ProductController extends Controller
{
    public function manage()
    {
        $data = Product::where('status','=','existing')->get();
        $data1 = Product::where('status','=','upcoming')->get();
       return \view('superadmin.productmodule.manage',['data'=>$data,'data1'=>$data1]);
    }
    public function existingProducts()
    {
        $data = Product::where('status','=','existing')->get();
        return \view('superadmin.productmodule.existingProducts')->with('existingpro',$data);
    }
    public function upcomingProducts()
    {
        $data = Product::where('status','=','upcoming')->get();
        return \view('superadmin.productmodule.upcomingProducts')->with('upcomingpro',$data);
    }
    public function addProducts()
    {
        $category = Category::all();
        $vendor = Vendore::all();
        return \view('superadmin.productmodule.addProduct',['category'=>$category,'vendor'=>$vendor]);
    }

    public function productStore(Request $req)
    {
        $req->validate([
            'product_name' => 'required|min:5|max:30',
            'unit_prics' => 'required|integer|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        $value = new Product();
        
        $value->product_name = $req->product_name;
        $value->unit_prics = $req->unit_prics;
        $value->category_id = $req->category_id;
        $value->quantity = $req->quantity;
        $value->status = $req->status;
        $value->vendor_id = $req->vendor_id;
        $value->save();
        return \redirect('system/product_management/existing_products')->with('success','Product Added Successfully');
    }

    public function editExistingProduct($id)
    {
        $data = Product::find($id);
        $category = Category::all();
        $vendor = Vendore::all();
        return \view('superadmin.productmodule.editProduct',['data'=>$data,'category'=>$category,'vendor'=>$vendor]);
    }

    public function updateExistingProduct(Request $req)
    {
        $req->validate([
            'product_name' => 'required|min:5|max:30',
            'unit_prics' => 'required|integer|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        $value = Product::find($req->id);
        
        $value->product_name = $req->product_name;
        $value->unit_prics = $req->unit_prics;
        $value->category_id = $req->category_id;
        $value->quantity = $req->quantity;
        $value->status = $req->status;
        $value->vendor_id = $req->vendor_id;
        $value->save();
        return \redirect('system/product_management/existing_products')->with('success','Product Updated Successfully');
    }

    public function deleteExistingProduct($id)
    {
        $data = Product::find($id);
        return \view('superadmin.productmodule.deleteconfimation',\compact('data',$data));
    }

    public function deletedExistingProduct($id)
    {
        Product::destroy($id);
       return redirect('system/product_management/existing_products')->with('success','Product deleted successfully');
    }

    public function DetailsExistingProduct($id)
    {
        $data = Product::find($id);
       return \view('superadmin.productmodule.existingDetails',\compact('data',$data));
    }


    public function editUpcomingProduct($id)
    {
        $data = Product::find($id);
        $category = Category::all();
        $vendor = Vendore::all();
        // return \view('superadmin.productmodule.editProduct',['data'=>$data,'category'=>$category,'vendor'=>$vendor]);
        return \view('superadmin.productmodule.upcomingEdit',['data'=>$data,'category'=>$category,'vendor'=>$vendor]);
    }

    public function updateUpcomingProduct(Request $req)
    {
        $req->validate([
            'product_name' => 'required|min:5|max:30',
            'unit_prics' => 'required|integer|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        $value = Product::find($req->id);
        
        $value->product_name = $req->product_name;
        $value->unit_prics = $req->unit_prics;
        $value->category_id = $req->category_id;
        $value->quantity = $req->quantity;
        $value->status = $req->status;
        $value->vendor_id = $req->vendor_id;
        $value->save();
        return \redirect('system/product_management/upcoming_products')->with('success','Product Updated Successfully');
    }

    public function deleteUpcomingProduct($id)
    {
        $data = Product::find($id);
        return \view('superadmin.productmodule.upcomingDelete',\compact('data',$data));
    }

    public function deletedUpcomingProduct($id)
    {
        Product::destroy($id);
       return redirect('system/product_management/upcoming_products')->with('success','Product deleted successfully');
    }

    public function DetailsUpcomingProduct($id)
    {
        $data = Product::find($id);
       return \view('superadmin.productmodule.upcomingDetails',\compact('data',$data));
    }
}
