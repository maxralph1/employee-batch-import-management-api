<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::latest()->paginate();

        return EmployeeResource::collection($employees);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreEmployeeRequest $request)
    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);

            if ($data[0] == 'Emp ID') {
                continue;
            }

            Employee::create([
                'id' => $data[0],
                'name_prefix' => $data[1],
                'first_name' => $data[2],
                'middle_name_initial' => $data[3],
                'last_name' => $data[4],
                'gender' => $data[5],
                'email' => $data[6],
                'date_of_birth' => $data[7],
                'time_of_birth' => $data[8],
                'age_in_years' => $data[9],
                'date_of_joining' => $data[10],
                'age_in_company' => $data[11],
                'phone_number' => $data[12],
                'place_name' => $data[13],
                'county' => $data[14],
                'city' => $data[15],
                'zip' => $data[16],
                'region' => $data[17],
                'username' => $data[18],
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
