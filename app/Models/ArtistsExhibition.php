<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistsExhibition extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists_exhibition';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'exhibition_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'artist_id',
        'exhibition_name',
        'exhibition_date',
        //'start_date',
        //'end_date'
    ];
}
