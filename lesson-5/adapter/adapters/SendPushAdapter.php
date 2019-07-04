<?php

namespace adapters;

use interfaces\SendInfoInterface;
use senders\PushSend;

class SendPushAdapter implements SendInfoInterface
{
    /**
     * @var PushSend
     */
    protected $sender;

    /**
     * SendPushAdapter constructor.
     * @param PushSend $sender
     */
    public function __construct(PushSend $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param string $message
     */
    public function sendInfo(string $message): void
    {
        $this->sender->sendPush($message, date("H:i:s"));
    }
}