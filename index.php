<?php

require __DIR__ . '/vendor/autoload.php';

$loop = \React\EventLoop\Factory::create();

$filesystem = \React\Filesystem\Filesystem::create($loop);

$file = $filesystem->file('test.txt');

$file->getContents()->then(function ($contents) {
    echo 'Reading completed...' . PHP_EOL;
   //echo $contents . PHP_EOL;
});

$loop->addPeriodicTimer(1, function () {
    echo 'Timer...' . PHP_EOL;
});

$loop->run();
