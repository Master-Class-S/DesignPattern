<?php

namespace Masterclass\Designpattern\Observer\PHP\Custom;

class Mailer implements ObserverInterface
{
    public function update(SubjectInterface $subject)
    {
        echo get_class($subject) . 'mail sended' . PHP_EOL;
    }
}
