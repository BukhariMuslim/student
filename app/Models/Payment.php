<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Student;
use App\Models\Instructor;
use App\Models\Course;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'code',
        'student_id',
        'course_id',
        'instructor_id',
        'amount',
        'date',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ 'password' ];

    /**
     * Get the associated data.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    /**
     * Get the associated data.
     */
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }

    /**
     * Get the associated data.
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
