<?php

namespace App;

enum RolesEnum: string
{
    case SUPER = 'super';
    case ACCOUNTANT = 'accountant';
    case STOREMANAGER = 'store-manager';
    case SALESMAN = 'salesman';
    case WAREHOUSEKEEPER = 'warehouse-keeper';
    case WAREHOUSEWORKER = 'warehouse-worker';

    // extra helper to allow for greater customization of displayed values, without disclosing the name/value data directly
    public function label(): string
    {
        return match ($this) {
            static::SUPER => 'مدیر کل',
            static::ACCOUNTANT => 'حسابدار',
            static::STOREMANAGER => 'مدیر فروشگاه',
            static::SALESMAN => 'فروشنده',
            static::WAREHOUSEKEEPER => 'انباردار',
            static::WAREHOUSEWORKER => 'کارگر انبار',
        };
    }
}
