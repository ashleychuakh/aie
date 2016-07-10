<?php

namespace App\Http\Controllers;

use App\Mailers\AppMailer;
use Illuminate\Http\Request;
use App\Http\Requests\BookingDetailsRequest;
use App\Http\Requests\BookingAddressRequest;

class BookingController extends Controller {

	public function __construct()
	{
	}

	public function getBookAppointmentStep1()
	{
		return view("pages.book.step1");
	}

	public function postBookAppointmentStep1(BookingDetailsRequest $request)
	{
		$request->session()->put('bookingdetails', $request->all());

		return redirect()->route('book/step2');
	}

	public function getBookAppointmentStep2(Request $request)
	{
		if ($request->session()->has('bookingdetails'))
		{
			return view("pages.book.step2");
		}
		else
		{
			$request->session()->flush();
			flash('An error has occured, please create another booking', 'error');
			return redirect()->route('book/step1');
		}
	}

	public function postBookAppointmentStep2(BookingAddressRequest $request)
	{
		if ($request->session()->has('bookingdetails'))
		{
			$request->session()->put('bookingaddress', $request->all());

			return redirect()->route('book/step3');
		}
		else
		{
			$request->session()->flush();
			flash('An error has occured, please create another booking', 'error');
			return redirect()->route('book/step1');
		}
	}

	public function getBookAppointmentStep3(Request $request)
	{
		if ($request->session()->has('bookingdetails') && $request->session()->has('bookingaddress'))
		{
			$bookingdetails = $request->session()->get('bookingdetails');
			$bookingaddress = $request->session()->get('bookingaddress');

			return view("pages.book.step3", compact('bookingdetails', 'bookingaddress'));
		}
		else
		{
			$request->session()->flush();
			flash('An error has occured, please create another booking', 'error');
			return redirect()->route('book/step1');
		}
	}

	public function postBookAppointmentStep3(Request $request, AppMailer $mailer)
	{
		if ($request->session()->has('bookingdetails') && $request->session()->has('bookingaddress'))
		{
			$bookingdetails = $request->session()->get('bookingdetails');
			$bookingaddress = $request->session()->get('bookingaddress');

			$mailer->sendBookingRequestEmail($bookingdetails, $bookingaddress);

			$request->session()->flush();

			$request->session()->put('bookingconfirmed', true);

			return redirect()->route('book/step4');
		}
		else
		{
			$request->session()->flush();
			flash('An error has occured, please create another booking', 'error');
			return redirect()->route('book/step1');
		}
	}

	public function getBookAppointmentStep4(Request $request)
	{
		if ($request->session()->has('bookingconfirmed'))
		{
			//$request->session()->flush();
			return view("pages.book.step4");
		}
		else
		{
			$request->session()->flush();
			flash('An error has occured, please create another booking', 'error');
			return redirect()->route('book/step1');
		}
	}
}
