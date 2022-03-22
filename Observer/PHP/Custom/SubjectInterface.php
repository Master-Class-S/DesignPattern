<?php

namespace Masterclass\Designpattern\Observer\PHP\Custom;

interface SubjectInterface
{
    public function attach(ObserverInterface $observer, string $event);

    public function notify(string $event);
}
