<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get products metadata
     */
    public function metadata()
    {
        return $this->hasMany(Metadata::class);
    }
}