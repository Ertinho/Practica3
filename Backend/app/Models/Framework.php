<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'year',
        'profile_id'
    ];

    /*
     * Get the profile that owns the Framework
     *
     *
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
