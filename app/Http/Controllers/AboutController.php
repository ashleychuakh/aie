<?php

namespace App\Http\Controllers;

use Log;

use Illuminate\Http\Request;
use App\Http\Requests;

class AboutController extends Controller {

	public function __construct()
	{
	}

	public function getAbout()
	{
		return view("pages.about");
	}
}
