<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubArticle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'article_id',
        'sub_article_number',
        'sub_article_body',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function sub_sub_articles()
    {
        $this->hasMany(SubSubArticle::class);
    }

    public function article()
    {
        $this->belongsTo(Article::class);
    }
}
