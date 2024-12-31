<?php

namespace App;

enum JobsEnum: string
{
    case HEAD = 'head';
    case ACCOUNTANT = 'accountant';
    case STOREMANAGER = 'store-manager';
    case SALESMAN = 'salesman';
    case WAREHOUSEKEEPER = 'warehouse-keeper';
    case WAREHOUSEWORKER = 'warehouse-worker';

    public function label(): string
    {
        return match ($this) {
            static::HEAD => 'مدیر',
            static::ACCOUNTANT => 'حسابدار',
            static::STOREMANAGER => 'مدیر فروشگاه',
            static::SALESMAN => 'فروشنده',
            static::WAREHOUSEKEEPER => 'انباردار',
            static::WAREHOUSEWORKER => 'کارگر انبار',
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
