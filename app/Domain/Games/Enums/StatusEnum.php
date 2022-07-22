<?php

namespace App\Domain\Games\Enums;

enum StatusEnum
{
    case ACTIVE;
    case INACTIVE;

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
