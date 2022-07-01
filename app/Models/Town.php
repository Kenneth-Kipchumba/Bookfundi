<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'town_name',
        'town_country',
        'town_county',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Get the country that the town belongs to
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
