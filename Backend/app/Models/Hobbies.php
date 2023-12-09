<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',

    ];

    /*
     * Get the profile that owns the Hobby
     *
     *
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
