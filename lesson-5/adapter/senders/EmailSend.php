<?php

namespace senders;

class EmailSend
{
    /**
     * @param string $message
     */
    public function sendEmail(string $message)
    {
        print_r($message . PHP_EOL . 'Email send' . PHP_EOL);
    }
}
