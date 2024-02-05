<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes = ['name', 'role','content'];
    protected $fillable = ['id', 'image', 'iconfacebook', 'icontwitter',
    'iconlinkedin', 'iconG+', 'created_at','updated_at'];
}
