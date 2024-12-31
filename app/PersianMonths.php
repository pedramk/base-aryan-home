<?php

namespace App;

enum PersianMonths: string
{
    case FARVARDIN = '01';
    case ORDIBEHESHT = '02';
    case KHORDAD = '03';
    case TIR = '04';
    case MORDAD = '05';
    case SHAHRIVAR = '06';
    case MEHR = '07';
    case ABAN = '08';
    case AZAR = '09';
    case DEY = '10';
    case BAHMAN = '11';
    case ESFAND = '12';


    public function label(): string
    {
        return match ($this) {
            static::FARVARDIN => 'فروردین',
            static::ORDIBEHESHT => 'اردیبهشت',
            static::KHORDAD => 'خرداد',
            static::TIR => 'تیر',
            static::MORDAD => 'مرداد',
            static::SHAHRIVAR => 'شهریور',
            static::MEHR => 'مهر',
            static::ABAN => 'آبان',
            static::AZAR => 'آذر',
            static::DEY => 'دی',
            static::BAHMAN => 'بهمن',
            static::ESFAND => 'اسفند',
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
