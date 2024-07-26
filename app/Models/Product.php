<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['Titre','Description','Prix','image','categorie_id'];
    public function Categorie():BelongsTo
    {
      return $this->belongsTo(Categorie::class);
    }
    use HasFactory;
}
