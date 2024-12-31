<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\StorePersonRequest;
use App\Models\Person;
use App\Models\User;
use App\NationalitiesEnum;
use App\JobsEnum;
use App\PersianMonths;
use App\ProvincesEnum;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Morilog\Jalali\CalendarUtils;

class HRController extends Controller
{
    public function list(Request $request)
    {
        $people = Person::all();

        return Inertia::render('HR/Person/List', [
            'people' => $people,
        ]);
    }

    public function create()
    {
        $jobs = JobsEnum::optionsArray();
        $nationalities = NationalitiesEnum::optionsArray();
        $months = PersianMonths::optionsArray();
        $provinces = ProvincesEnum::optionsArray();

        return Inertia::render('HR/Person/Create', [
            'jobs' => $jobs,
            'nationalities' => $nationalities,
            'months' => $months,
            'provinces' => $provinces,
        ]);
    }

    public function store(Request $request, StorePersonRequest $personRequest, StoreAddressRequest $addressRequest)
    {
        $create_account = $request->boolean('create_account');
        $person_data = $personRequest->all();

        $birthdate = (CalendarUtils::createCarbonFromFormat("Y/m/d", "{$person_data['birthdate']['year']}/{$person_data['birthdate']['month']}/{$person_data['birthdate']['day']}"))->toDateString();
        $job_start_date = (CalendarUtils::createCarbonFromFormat("Y/m/d", "{$person_data['job_start_date']['year']}/{$person_data['job_start_date']['month']}/{$person_data['job_start_date']['day']}"))->toDateString();

        $person_data['birthdate'] = $birthdate;
        $person_data['job_start_date'] = $job_start_date;

        $person = Person::create($person_data);
        $person->address()->create($addressRequest->all());

        if ($create_account) {
            $randomPassword = 'pass';

            User::create([
                'mobile' => $person_data['mobile'],
                'password' => bcrypt($randomPassword),
            ]);
        }

        return to_route('hr.people.list');
    }
}
