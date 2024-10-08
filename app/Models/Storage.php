<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Storage extends Model
{
    use HasFactory;
    /**
     * @return HasMany
     */
    public function product(): HasMany{
        return $this->hasMany(Product::class);
    }
    /**
     * @return HasMany
     */
    public function user(): HasMany{
        return $this->hasMany(User::class);
    }

}
