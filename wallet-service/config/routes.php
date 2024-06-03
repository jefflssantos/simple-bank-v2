<?php

declare(strict_types=1);

use App\Controller\WalletController;
use Hyperf\HttpServer\Router\Router;

Router::get('/wallet', [WalletController::class, 'index']);
