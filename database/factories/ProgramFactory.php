<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Entities\Program;
use Faker\Generator as Faker;

$factory->define(Program::class, function (Faker $faker) {
    return [
        'event_name' => 'Central Elementary Fun Run',
    ];
});
