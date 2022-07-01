<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country_name',
        'country_code',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function towns()
    {
        return $this->hasMany(Town::class);
    }

    public function counties()
    {
        return $this->hasMany(County::class);
    }
}
