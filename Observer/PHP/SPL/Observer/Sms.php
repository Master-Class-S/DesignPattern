<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL\Observer;

class Sms implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        $user = $subject->getUser();
        if ($user) {
            echo get_class($subject) . ': sms sended to ' . $user->phone . PHP_EOL;
        }
    }
}
