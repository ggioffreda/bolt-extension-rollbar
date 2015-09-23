<?php

namespace Bolt\Extension\Gioffreda\Rollbar;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    public function getDefaultConfig()
    {
        return array(
            // Default included errors: E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR
            'included_errno' => 4871
        );
    }

    public function initialize()
    {
        // Only initialise rollbar if it's been installed.
        if (class_exists('Rollbar')) {
            \Rollbar::init($this->getConfig());
        }
    }

    public function getName()
    {
        return "rollbar";
    }
}
