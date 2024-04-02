<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    public $fillable=['reference','name','description','quantity','price','supplier_id','storage_id','position'];

    /**
     * @return BelongsTo
     */
    public function storage(): BelongsTo{
        return $this->belongsTo(Storage::class);
    }
    /**
     * @return BelongsTo
     */
    public function supplier(): BelongsTo{
        return $this->belongsTo(Supplier::class);
    }
}
