<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $storageId=$user->storage_id;
        $roleId=$user->role_id;
        if($roleId==1){
            return Product::with("storage")->with("supplier")->where("storage_id",$storageId)->where("price",'!=',0)->get();
        }
        else if($roleId==2){
            return Product::with("storage")->with("supplier")->where("storage_id",$storageId)->get();
        }
        return abort(403);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $user=Auth::user();
        $storageId=$user->storage_id;
        return Product::create(array_merge($request->all(['reference','name','description','quantity','supplier_id','position']),['storage_id'=>$storageId]));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return Product::with('storage')->with('supplier')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, int $id)
    {
        $product=Product::find($id);
        $product->update($request->all());
        return $product;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product=Product::find($id);
        $product->delete();
        return response()->json("Success");
    }
}
