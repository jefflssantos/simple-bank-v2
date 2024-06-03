<?php

declare(strict_types=1);

use App\Model\Wallet;

/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/3.0/README.md
 * @contact  huangdijia@gmail.com
 */
// use App\Model\Model;

// $factory->define(Model::class, function (Faker\Generator $faker) {
//     return [
//         'field' => 'value',
//     ];
// });

$factory->define(Wallet::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->randomElement(['consumer', 'seller']),
        'balance' => $faker->numberBetween(0, 100_00)
    ];
});
