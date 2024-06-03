<?php

namespace App\Resource;

use Hyperf\Resource\Json\JsonResource;

class WalletResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'balance' => number_format($this->balance / 100, 2, ',', '.')
        ];
    }
}
