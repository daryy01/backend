<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'instructors';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'instructor_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instructor_firstname',
        'instructor_lastname',
        'instructor_contact',
        'instructor_bio',
    ];
}
