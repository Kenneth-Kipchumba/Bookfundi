<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'chapter',
        'part',
        'article',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function sub_articles()
    {
        return $this->hasMany(SubArticle::class);
    }
}
