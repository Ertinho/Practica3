<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function getProfile()
    {
        $profile = Profile::with('hobbies', 'frameworks')->first();
        return response()->json($profile);
    }

}
