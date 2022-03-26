<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL\Observer;

class Push implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        $user = $subject->getUser();
        if ($user) {
            echo get_class($subject) . ': message pushed fro ' . $user->firstname . ' ' . $user->lastname . PHP_EOL;
        }
    }
}
