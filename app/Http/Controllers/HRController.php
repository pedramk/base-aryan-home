<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Models\Person;
use App\NationalitiesEnum;
use App\JobsEnum;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Morilog\Jalali\CalendarUtils;

class HRController extends Controller
{
    public function create()
    {
        $jobs = JobsEnum::optionsArray();
        $nationalities = NationalitiesEnum::optionsArray();

        return Inertia::render('HR/Person/Create', [
            'jobs' => $jobs,
            'nationalities' => $nationalities,
        ]);
    }

    public function store(StorePersonRequest $request)
    {
        $data = $request->all();

        $birthdate = (CalendarUtils::createCarbonFromFormat("Y/m/d", "{$data['birthdate']['year']}/{$data['birthdate']['month']}/{$data['birthdate']['day']}"))->toDateString();
        $job_start_date = (CalendarUtils::createCarbonFromFormat("Y/m/d", "{$data['job_start_date']['year']}/{$data['job_start_date']['month']}/{$data['job_start_date']['day']}"))->toDateString();

        $data['birthdate'] = $birthdate;
        $data['job_start_date'] = $job_start_date;

        $person = Person::create($data);
    }
}
