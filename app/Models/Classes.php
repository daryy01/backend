<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'class_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class_name',
        'instructor_id',
        'class_date',
        //'start_date',
        //'end_date'
    ];
}
