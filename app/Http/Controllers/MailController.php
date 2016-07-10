<?php

namespace App\Http\Controllers;

use App\Mailers\AppMailer;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\FaqContactRequest;

class MailController extends Controller
{
	public function postContact(ContactRequest $request, AppMailer $mailer) {
        $mailer->sendContactEmail($request->all());

		flash('Thank You for Contacting Us, you\'ll be contacted within the next few days', 'success');
        return redirect()->back();
    }

    public function postFaqContact(FaqContactRequest $request, AppMailer $mailer) {
        $mailer->sendFaqEmail($request->all());

		flash('FAQ Contact Email Sent, you\'ll be contacted within the next few days', 'success');
        return redirect()->back();
    }
}
