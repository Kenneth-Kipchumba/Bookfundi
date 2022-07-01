<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'county_name',
        'county_code',
        'county_country',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Get the country that the county belongs to
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
