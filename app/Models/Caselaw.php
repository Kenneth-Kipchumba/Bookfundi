<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caselaw extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'case_number',
        'case_title',
        'case_plaintiff',
        'case_respondent',
        'case_defendant',
        'case_appellant',
        'case_judges',
        'plaintiffs_advocate' ,
        'respondents_advocate',
        'defendants_advocate',
        'appellants_advocate',
        'case_decision',
        'case_outcome',
        'citation',
        'case_date',
        'case_country',
        'case_county',
        'case_town',
        'case_court',
        'case_body',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
