<?php

declare(strict_types=1);

use App\Model\Wallet;
use Hyperf\Database\Seeders\Seeder;

use function FriendsOfHyperf\ModelFactory\factory;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::create([
            'type' => 'consumer',
            'balance' => 100_00,
        ]);

        Wallet::create([
            'type' => 'seller',
            'balance' => 0,
        ]);

        factory(Wallet::class, 10)->create();
    }
}
