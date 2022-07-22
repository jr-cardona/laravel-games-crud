<?php

namespace App\Domain\Games\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class GameQueryBuilder extends Builder
{
    public function getAll(): Collection
    {
        return $this->query->get();
    }
}
