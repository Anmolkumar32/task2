<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'quantity', 'created_by'];

    // Optional: Define relationships or additional methods as needed

    /**
     * Get the user that created the product.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
