<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'number',
        'name',
        'body',
        'legal_notice',
        'legal_notice_date',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
