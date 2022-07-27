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
        'chapter_id',
        'part_id',
        'article_number',
        'article_body',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function chapter()
    {
        $this->belongsTo(Chapter::class);
    }

    public function part()
    {
        $this->belongsTo(Part::class);
    }

    public function sub_articles()
    {
        return $this->hasMany(SubArticle::class);
    }
}
