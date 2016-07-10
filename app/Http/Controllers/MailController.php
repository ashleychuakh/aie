<?php

namespace App\Http\Controllers;

use App\Mailers\AppMailer;
use App\Http\Requests\FaqContactRequest;

class MailController extends Controller
{
    public function postFaqContact(FaqContactRequest $request, AppMailer $mailer) {
        $mailer->sendFaqEmail($request->all());

		flash('FAQ Contact Email Sent, you\'ll be contacted within the next few days', 'success');
        return redirect()->back();
    }
}
