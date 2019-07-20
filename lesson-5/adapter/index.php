<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

(new \adapters\SendSmsAdapter(new \senders\SmsSend('Vasya')))->sendInfo('sms_1');
(new \adapters\SendEmailAdapter(new \senders\EmailSend()))->sendInfo('email_1');
(new \adapters\SendPushAdapter(new \senders\PushSend()))->sendInfo('push_1');

(new \adapters\SendSmsAdapter(new \senders\SmsSend('Vasya')))->sendInfo('sms_2');
(new \adapters\SendEmailAdapter(new \senders\EmailSend()))->sendInfo('email_2');
(new \adapters\SendPushAdapter(new \senders\PushSend()))->sendInfo('push_2');