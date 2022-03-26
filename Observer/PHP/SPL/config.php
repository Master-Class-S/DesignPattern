<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL;

use Masterclass\Designpattern\Observer\PHP\SPL\Observer\Mailer;
use Masterclass\Designpattern\Observer\PHP\SPL\Observer\Sms;
use Masterclass\Designpattern\Observer\PHP\SPL\Observer\Push;

return [
    new Mailer(),
    new Sms(),
    new Push(),
];