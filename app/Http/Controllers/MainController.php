<?php 

namespace App\Http\Controllers;

use Log;
use Carbon\Carbon;
use Socialite;

use Illuminate\Http\Request;
use App\Http\Requests;

class MainController extends Controller {

	public function __construct()
	{
	}

	public function getMain()
	{
		return view("pages.main");
	}

	public function getTerms()
	{
		return view("pages.terms");
	}

	public function getPrivacy()
	{
		return view("pages.privacy");
	}

	public function getTest()
	{
        $assignment = Assignment::findOrFail(5);
		return view("pages.blank");
	}

	public function getPromotions(Request $request)
	{

	}
}
