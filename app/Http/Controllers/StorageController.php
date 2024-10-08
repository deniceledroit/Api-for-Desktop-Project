<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStorageRequest;
use App\Http\Requests\UpdateStorageRequest;
use App\Models\Storage;
use Illuminate\Support\Facades\Auth;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function allWithoutMine()
    {
        $user=Auth::user();
        $storageId=$user->storage_id;
        return Storage::where('id',"!=",$storageId)->get();
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
    public function store(StoreStorageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Storage $storage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStorageRequest $request, Storage $storage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storage $storage)
    {
        //
    }
}
