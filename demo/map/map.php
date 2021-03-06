<?php

require_once __DIR__ . '/../bootstrap.php';

$observable = new Rx\Observable\ArrayObservable(array(21, 42));
$observable
    ->map(function($elem) { return $elem * 2; })
    ->subscribe($stdoutObserver);
