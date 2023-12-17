<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRegistration extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_registration';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'registration_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'artist_id',
        'class_id',
        'registration_date',
        //'start_date',
        //'end_date'
    ];
}
