<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubArticle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'sub_article_id',
        'description',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function sub_article()
    {
        $this->belongsTo(SubArticle::class);
    }
}
