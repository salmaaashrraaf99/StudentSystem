<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/student/create', function (Request $request)
{
    $data= $request->all();

    if(!Student::where('email','=' , $data['email'])->exists())
    {
        $user= User::create([
            "name"=> $data["name"],
            "email"=> $data["email"],
            "password"=> Hash::make($data["password"])

        ]);

        if(empty($student->id))
        {
            return [
            "success" => false,
            "response" => [
                "error" => "An expected error has occured"
               ]
            ];
        }

        else{
            return [
                "success" => true,
                "response" => [
                    "student" => $student
                   ]
                ];
        }

    }
    else{
        return [
            "success" => false,
            "response" => [
                "error" => "The user already exists"
            ]
            ];
    }
});
