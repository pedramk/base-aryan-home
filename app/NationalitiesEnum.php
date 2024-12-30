<?php

namespace App;

enum NationalitiesEnum: string
{
    case IR = 'ir';
    case AF = 'af';

    public function label(): string
    {
        return match ($this) {
            static::IR => 'ایران',
            static::AF => 'افغانستان',
        };
    }

    public static function optionsArray(): array
    {
        return array_combine(
            array_column(static::cases(), 'value'),
            array_map(fn($case) => $case->label(), static::cases())
        );
    }
}
