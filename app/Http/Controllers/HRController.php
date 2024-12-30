<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHRPersonRequest;
use App\NationalitiesEnum;
use App\RolesEnum;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Morilog\Jalali\CalendarUtils;

class HRController extends Controller
{
    public function create()
    {
        $roles = RolesEnum::optionsArray();
        $nationalities = NationalitiesEnum::optionsArray();

        return Inertia::render('HR/Person/Create', [
            'roles' => $roles,
            'nationalities' => $nationalities,
        ]);
    }

    public function store(StoreHRPersonRequest $request)
    {
        $data = $request->all();

        return (CalendarUtils::createCarbonFromFormat("Y/m/d", "{$data['birthdate']['year']}/{$data['birthdate']['month']}/{$data['birthdate']['day']}"))->toDateString();
    }
}
