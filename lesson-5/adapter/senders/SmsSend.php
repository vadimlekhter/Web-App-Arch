<?php

namespace senders;

class SmsSend
{
    /**
     * @var string
     */
    public $from;

    /**
     * SmsSend constructor.
     * @param string $from
     */
    public function __construct(string $from)
    {
        $this->from = $from;
    }


    /**
     * @param string $message
     * @param string $sender
     */
    public function sendSms(string $message)
    {
        print_r($message . PHP_EOL . 'SMS send' . PHP_EOL . $this->from . PHP_EOL);
    }
}