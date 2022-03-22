<?php

namespace Masterclass\Designpattern\Observer\PHP\SPL;

use Masterclass\Designpattern\Observer\PHP\SPL\Mailer;
use Masterclass\Designpattern\Observer\PHP\SPL\Sms;
use Masterclass\Designpattern\Observer\PHP\SPL\Push;

return [
    new Mailer(),
    new Sms(),
    new Push(),
];