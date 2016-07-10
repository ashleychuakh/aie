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

	public function getAbout()
	{
		return view("pages.about");
	}

	public function getServices()
	{
		return view("pages.services");
	}

	public function getPackages()
	{
		return view("pages.packages");
	}

	public function getMaterials()
	{
		return view("pages.materials");
	}

	public function getProducts()
	{
		return view("pages.products");
	}

	public function getProductDetails()
	{
		return view("pages.productdetails");
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
		return view("pages.confirmation");
	}

	public function getPromotions(Request $request)
	{

	}

	public function getfaq(){
		return view("pages.faq");
	}

	public function getContact(){
		return view("pages.contact");
	}
}
