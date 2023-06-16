<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_en', 'category_es', 'category_fr', 'category_de'];
    public function announces()
    {
        return $this->hasMany(Announce::class);
    }
}
