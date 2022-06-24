<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'judge_name',
        'judge_current_court_level',
        'judge_current_country',
        'judge_current_county',
        'judge_current_town',
        'judge_previous_court_level',
        'judge_previous_country',
        'judge_previous_county',
        'judge_previous_town',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
