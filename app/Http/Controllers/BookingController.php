<?php

namespace App\Http\Controllers;

use Auth;
use Log;

use Illuminate\Http\Request;
use App\Http\Requests;

class BookingController extends Controller {

	public function __construct()
	{
	}

	public function getBookAppointmentStep1()
	{
		return view("pages.book.step1");
	}

	public function getBookAppointmentStep2()
	{
		$account = Auth::user();
        $defaultaddress = $account->defaultaddress()->first() != null ? $account->defaultaddress()->first() : new AccountAddress;
        $billingaddress = $account->billingaddress()->first() != null ? $account->billingaddress()->first() : new AccountAddress;

		return view("pages.book.step2", compact('account', 'defaultaddress', 'billingaddress'));
	}

	public function getBookAppointmentStep3()
	{
		return view("pages.book.step3");
	}
}
