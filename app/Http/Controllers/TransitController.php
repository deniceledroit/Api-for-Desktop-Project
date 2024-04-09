<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransitRequest;
use App\Http\Requests\UpdateTransitRequest;
use App\Models\Transit;
use Illuminate\Support\Facades\Auth;

class TransitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $userId=$user->id;
        return Transit::where("storageFrom_id",$userId)->get();
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
    public function store(StoreTransitRequest $request)
    {
        $user=Auth::user();
        $storageId=$user->storage_id;
        return Transit::create(array_merge($request->all(['product_id','storageTo_id','number','arriveDate']),['storageFrom_id'=>$storageId,'startDate'=>now()]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Transit $transit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transit $transit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransitRequest $request, Transit $transit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transit $transit)
    {
        //
    }
}
