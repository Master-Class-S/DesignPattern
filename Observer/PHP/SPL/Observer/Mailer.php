<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL\Observer;

class Mailer implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        $user = $subject->getUser();
        if ($user) {
            echo get_class($subject) . ': email sended to ' . $user->email . PHP_EOL;
        }
    }
}