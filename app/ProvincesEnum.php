<?php

namespace App;

enum ProvincesEnum
{
    case AL;
    case AR;
    case BU;
    case CB;
    case EA;
    case FA;
    case GO;
    case GI;
    case HA;
    case HO;
    case IL;
    case IS;
    case KE;
    case KS;
    case KH;
    case KB;
    case KU;
    case LO;
    case MA;
    case MZ;
    case NK;
    case QA;
    case QO;
    case RK;
    case SE;
    case SB;
    case SK;
    case TE;
    case WA;
    case YA;
    case ZA;


    public function label(): string
    {
        return match ($this) {
            self::AL => 'البرز',
            self::AR => 'اردبیل',
            self::BU => 'بوشهر',
            self::CB => 'چهارمحال و بختیاری',
            self::EA => 'آذربایجان شرقی',
            self::FA => 'فارس',
            self::GO => 'گلستان',
            self::GI => 'گیلان',
            self::HA => 'همدان',
            self::HO => 'هرمزگان',
            self::IL => 'ایلام',
            self::IS => 'اصفهان',
            self::KE => 'کرمان',
            self::KS => 'کرمانشاه',
            self::KH => 'خوزستان',
            self::KB => 'کهگیلویه و بویراحمد',
            self::KU => 'کردستان',
            self::LO => 'لرستان',
            self::MA => 'مرکزی',
            self::MZ => 'مازندران',
            self::NK => 'خراسان شمالی',
            self::QA => 'قزوین',
            self::QO => 'قم',
            self::RK => 'خراسان رضوی',
            self::SE => 'سمنان',
            self::SB => 'سیستان و بلوچستان',
            self::SK => 'خراسان جنوبی',
            self::TE => 'تهران',
            self::WA => 'آذربایجان غربی',
            self::YA => 'یزد',
            self::ZA => 'زنجان',
        };
    }

    public static function optionsArray(): array
    {
        return array_combine(
            array_map(fn($case) => strtolower($case->name), static::cases()),
            array_map(fn($case) => $case->label(), static::cases())
        );
    }
}
