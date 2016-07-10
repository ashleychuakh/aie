<?php

if ( ! function_exists('flash')) {

    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @return \Laracasts\Flash\FlashNotifier
     */
/*    function flash($message = null)
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->info($message);
        }

        return $notifier;
    }*/

    function flash($message = null, $level = 'info')
    {
        $notifier = app('flash');

        if ( ! is_null($message)) {
            return $notifier->message($message, $level);
        }
        
        return $notifier;
    }

}