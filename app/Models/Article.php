<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'id',
        'titre',
        'resum',
        'contenu',
        'image'
    ];
    public $timestamps = false;
    use HasFactory;
}
