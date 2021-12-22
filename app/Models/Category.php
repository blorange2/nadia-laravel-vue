<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    /**
     * Generate a slug given the name attribute.
     */
    public function getSlugAttribute()
    {
        return Str::slug($this->name);
    }
}
