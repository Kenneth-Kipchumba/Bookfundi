<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firm_name',
        'firm_country',
        'firm_county',
        'firm_town',
        'firm_address',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
