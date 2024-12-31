<?php

namespace App\Models;

use App\JobsEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'personal_code',
        'national_id',
        'birthdate',
        'job_title',
        'job_start_date',
        'nationality',
        'email',
    ];

    protected $appends = ['job_title_value'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

    protected function jobTitleValue(): Attribute
    {
        return new Attribute(
            get: fn() => JobsEnum::from($this->job_title)->label(),
        );
    }

    public function address(): HasOne
    {
        return $this->hasOne(PersonAddress::class);
    }
}
