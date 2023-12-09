<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Hobbies;
use App\Models\Framework;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{

    public function getProfile()
    {
        $profile = Profile::with('hobbies', 'frameworks')->first();

        if(!$profile) {
            return response()->json(['message' => 'No se ha encontrado el perfil.'], 404);
        }
        return response()->json($profile);
    }



    public function updateProfile(UpdateProfileRequest $request)
    {
        $validated = $request->validated();
        $profile = Profile::with('hobbies', 'frameworks')->first();
        $profile->update($validated);



        $hobbies = $validated['hobbies'];

        foreach ($hobbies as $item) {
            $myHobby = Hobbies::where('id',$item['id'])->first();
            $myHobby->name = $item['name'];
            $myHobby->description = $item['description'];
            $myHobby->save();
        }

        $frameworks = $validated['frameworks'];

        foreach ($frameworks as $item) {
            $myFramework = Framework::where('id',$item['id'])->first();
            $myFramework->name = $item['name'];
            $myFramework->level = $item['level'];
            $myFramework->year = $item['year'];
            $myFramework->save();
        }

        return response()->json(['message' => 'Se ha actualizado el perfil correctamente.']);
    }

}
