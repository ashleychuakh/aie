<?php

namespace App\Mailers;

use App\Models\Account;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer
{

    /**
     * The Laravel Mailer instance.
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * The sender of the email.
     *
     * @var string
     */
    protected $from = 'noreply@webtailors.sg';

    /**
     * The recipient of the email.
     *
     * @var string
     */
    protected $to;

    /**
     * The view for the email.
     *
     * @var string
     */
    protected $view;

    /**
     * The data associated with the view for the email.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Create a new app mailer instance.
     *
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Deliver the email confirmation.
     *
     * @param  User $user
     * @return void
     */
    public function sendEmailConfirmationTo(Account $account)
    {
        $this->to = $account->email;
        $this->view = 'emails.confirm';
        $this->data = compact('account');
        $this->subject = 'AIE SG Account Confirmation Email';

        $this->deliver();
    }

    public function sendFaqEmail($data)
    {
        $this->to = 'zane@webtailors.sg';
        $this->view = 'emails.faqcontact';
        $this->data = compact('data');
        $this->subject = 'AIESG FAQ Contact Email';

        $this->deliver();
    }

    public function sendContactEmail($data)
    {
        $this->to = 'zane@webtailors.sg';
        $this->view = 'emails.contact';
        $this->data = compact('data');
        $this->subject = 'AIESG Contact Email';

        $this->deliver();
    }

    public function sendBookingRequestEmail($bookingdetails, $bookingaddress)
    {
        $this->to = 'zane@webtailors.sg';
        $this->view = 'emails.booking';
        $this->data = compact('bookingdetails', 'bookingaddress');
        $this->subject = 'AIESG Booking Request Email';

        $this->deliver();
    }

    /**
     * Deliver the email.
     *
     * @return void
     */
    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from($this->from, 'WebTailors Noreply')
                    ->to($this->to)->subject($this->subject);
        });
    }
}
