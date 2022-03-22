<?php

namespace Masterclass\Designpattern\Observer\PHP\Custom;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}
