<?php

namespace Masterclass\Designpattern\Observer\PHP\Custom;

class Sms implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        echo get_class($subject) . 'sms sended' . PHP_EOL;
    }
}
