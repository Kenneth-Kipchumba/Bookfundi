<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'chapter_name',
        'chapter_body',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
