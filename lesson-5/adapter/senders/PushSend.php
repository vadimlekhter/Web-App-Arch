<?php

namespace senders;

class PushSend
{
    /**
     * @param string $message
     */
    public function sendPush(string $message, $datetime)
    {
        print_r($message . PHP_EOL . 'Push send' . PHP_EOL . $datetime . PHP_EOL);
    }
}