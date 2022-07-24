<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'chapter_id',
        'part_name',
        'part_body',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function chapter()
    {
        $this->belongsTo(Chapter::class);
    }

     public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
