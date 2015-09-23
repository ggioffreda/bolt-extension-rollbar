<?php

/** @var \Bolt\Application $app */
if (isset($app)) {
    $app['extensions']->register(new \Bolt\Extension\Gioffreda\Rollbar\Extension($app));
}
