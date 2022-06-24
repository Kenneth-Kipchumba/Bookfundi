<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magistrate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'magistrate_name',
        'magistrate_current_court_level',
        'magistrate_current_country',
        'magistrate_current_county',
        'magistrate_current_town',
        'magistrate_previous_court_level',
        'magistrate_previous_country',
        'magistrate_previous_county',
        'magistrate_previous_town',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
