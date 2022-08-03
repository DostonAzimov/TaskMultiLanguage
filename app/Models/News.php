<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table="news";

    protected $fillable=['category_id','desc_uz','desc_en','desc_ru','title_en','title_ru','title_uz'];


    public function category()
    {
       return $this->belongsTo(Category::class);
    }


}
