<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'organizers';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'organizer_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'organizer_firstname',
        'organizer_lastname',
        'organizer_contact',
        'organizer_bio',
    ];
}
