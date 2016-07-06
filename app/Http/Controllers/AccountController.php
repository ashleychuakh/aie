<?php 

namespace App\Http\Controllers;

use Log;
use Carbon\Carbon;
use Socialite;

use Illuminate\Http\Request;
use App\Http\Requests;

class AccountController extends Controller {

	public function __construct()
	{
	}

	public function getAccountSignin()
	{
		return view("pages.signin");
	}

	
}
