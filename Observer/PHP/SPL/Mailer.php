<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL;

use SplSubject;

class Mailer implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo get_class($subject) . ': mail sended' . PHP_EOL;
    }
}