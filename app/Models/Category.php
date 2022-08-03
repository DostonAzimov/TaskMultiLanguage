<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";

    protected $fillable=['name_en','name_ru','name_uz'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

}
