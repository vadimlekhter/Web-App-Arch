<?php

namespace adapters;

use interfaces\SendInfoInterface;
use senders\SmsSend;

class SendSmsAdapter implements SendInfoInterface
{
    /**
     * @var SmsSend
     */
    protected $sender;

    /**
     * SendSmsAdapter constructor.
     * @param SmsSend $sender
     */
    public function __construct(SmsSend $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param string $message
     */
    public function sendInfo(string $message): void
    {
        $this->sender->sendSms($message);
    }
}