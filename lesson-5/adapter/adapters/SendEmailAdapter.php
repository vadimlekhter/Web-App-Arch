<?php

namespace adapters;

use interfaces\SendInfoInterface;
use senders\EmailSend;

class SendEmailAdapter implements SendInfoInterface
{
    /**
     * @var EmailSend
     */
    protected $sender;

    /**
     * SendEmailAdapter constructor.
     * @param EmailSend $sender
     */
    public function __construct(EmailSend $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param string $message
     */
    public function sendInfo(string $message): void
    {
        $this->sender->sendEmail($message);
    }
}