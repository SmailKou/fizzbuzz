<?php

declare(strict_types=1);

use App\Application;
use App\Rule\Fizz;
use App\Rule\Buzz;
use App\Rule\FizzBuzz;

include __DIR__ . '/../vendor/autoload.php';

$app = new Application();
$app->addRule(new FizzBuzz());
$app->addRule(new Buzz());
$app->addRule(new Fizz());
$app->print(100);