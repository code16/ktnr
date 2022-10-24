<?php

use Illuminate\Container\Container;

/** @var $container Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

// https://jigsaw.tighten.com/docs/event-listeners/

\Code16\Jigsaw\Jigsaw::init($events, $container);

