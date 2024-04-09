<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transit extends Model
{
    use HasFactory;
    public $fillable=['product_id','storageFrom_id','storageTo_id','number','startDate','arriveDate'];
}
