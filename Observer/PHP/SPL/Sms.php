<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL;

use SplSubject;

class Sms implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo get_class($subject) . ': sms sended' . PHP_EOL;
    }
}