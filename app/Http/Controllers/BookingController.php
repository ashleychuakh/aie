<?php

namespace App\Http\Controllers;

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
		return view("pages.book.step2");
	}

	public function getBookAppointmentStep3()
	{
		return view("pages.book.step3");
	}
}
