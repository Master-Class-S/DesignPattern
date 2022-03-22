<?php

use Masterclass\Designpattern\Observer\PHP\Custom\Mailer;
use Masterclass\Designpattern\Observer\PHP\Custom\Push;
use Masterclass\Designpattern\Observer\PHP\Custom\Sms;
use Masterclass\Designpattern\Observer\PHP\Custom\UserHandler;

return [
    UserHandler::EVENT_CREATE => [new Mailer(), new Sms()],
    UserHandler::EVENT_DELETE => [new Push()],
];
