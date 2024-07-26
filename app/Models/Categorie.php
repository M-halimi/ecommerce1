<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    protected $fillable = ['name'];
    public function product():HasMany
    {
     return $this->hasMany(Categorie::class);
    }
    use HasFactory;
}
