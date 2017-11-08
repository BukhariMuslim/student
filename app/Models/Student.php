<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Payment;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ 
        'password',
        'remember_token',
    ];

    /**
     * Get the associated data.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
