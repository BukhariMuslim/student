<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ ];

    /**
     * Get the associated data.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
