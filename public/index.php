<?php

use App\Kernel;
#user 2 add
#user 2
# line 4 user 1 add
#line 4 user 1 add
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
