<?php
define('BASE_DIR', realpath((__DIR__ . '/..')));

require_once BASE_DIR . '/vendor/autoload.php';

use Observer\NewsAggregator;
use Observer\Widgets\TwitterObserver;
use Observer\Widgets\LentaObserver;
use Observer\Widgets\TvObserver;

$aggregator = new NewsAggregator();
$twitterWidget = new TwitterObserver($aggregator);
$lentaWidget = new LentaObserver($aggregator);
$tvWidget = new TvObserver($aggregator);

$aggregator->newNewsAvailable();

$twitterWidget->removeFromObserver();
echo PHP_EOL;

$aggregator->newNewsAvailable();