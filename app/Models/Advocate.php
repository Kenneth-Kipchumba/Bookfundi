<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advocate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'advocate_name',
        'advocate_firm',
        'advocate_specialization',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
