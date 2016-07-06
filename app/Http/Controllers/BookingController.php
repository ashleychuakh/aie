<?php

namespace App\Http\Controllers;

use Log;

use Illuminate\Http\Request;
use App\Http\Requests;

class BookingController extends Controller {

	public function __construct()
	{
	}

	public function getBookAppointment()
	{
		return view("pages.book");
	}

	public function getBookAppointmentStep2()
	{
		return view("pages.book2");
	}

	public function getBookAppointmentStep3()
	{
		return view("pages.book3");
	}
}
