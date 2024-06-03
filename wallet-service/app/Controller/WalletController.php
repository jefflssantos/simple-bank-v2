<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Wallet;
use App\Resource\WalletResource;

class WalletController
{
    public function index()
    {
        return WalletResource::collection(Wallet::all())->toResponse();
    }
}
