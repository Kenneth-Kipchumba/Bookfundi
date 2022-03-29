<?php

namespace App\Helpers;

use App\Models\Country;
use App\Models\County;
use App\Models\Court;
use App\Models\Role;
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

}