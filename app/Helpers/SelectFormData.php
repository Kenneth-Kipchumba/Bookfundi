<?php

namespace App\Helpers;

use App\Models\Advocate;
use App\Models\Country;
use App\Models\County;
use App\Models\Court;
use App\Models\Decision;
use App\Models\Firm;
use App\Models\Judge;
use App\Models\Magistrate;
use App\Models\Outcome;
use App\Models\Party;
use App\Models\Role;
use App\Models\Specialization;
use App\Models\Town;
use App\Models\User;

class SelectFormData
{
	public static function country()
	{
		return Country::all();
	}

	public static function county()
	{
		//return County::where('county_country', 'Kenya');
		return County::all();
	}

	public static function province()
	{
		return County::where('county_country', 'Uganda');
	}

	public static function court()
	{
		return Court::all();
	}

	public static function role()
	{
		return Role::all();
	}

	public static function town()
	{
		return Town::all();
	}

	public static function user()
	{
		return User::all();
	}

	public static function firm()
	{
		return Firm::all();
	}

	public static function specialization()
	{
		return Specialization::all();
	}

	public static function advocate()
	{
		return Advocate::all();
	}

	public static function decision()
	{
		return Decision::all();
	}

	public static function outcome()
	{
		return Outcome::all();
	}

	public static function party()
	{
		return Party::all();
	}

	public static function judge()
	{
		return Judge::all();
	}

	public static function magistrate()
	{
		return Magistrate::all();
	}

}