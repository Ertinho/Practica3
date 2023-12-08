<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'city',
        'country',
        'summary',
    ];

    /*
     * Get the hobbies for the profile.
     *
     *
     */
    public function hobbies()
    {
        return $this->hasMany(Hobbies::class);
    }

    /*
     * Get the frameworks for the profile.
     *
     *
     */
    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }

}
