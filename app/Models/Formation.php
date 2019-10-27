<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Formation
 * @package App\Models
 * @version October 24, 2019, 6:51 pm UTC
 *
 * @property integer user_id
 * @property string title
 * @property string|\Carbon\Carbon startDate
 * @property string|\Carbon\Carbon endDate
 * @property string organization
 * @property string pfeTitle
 */
class Formation extends Model
{
    use SoftDeletes;

    public $table = 'formations';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'title',
        'startDate',
        'endDate',
        'organization',
        'pfeTitle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'title' => 'string',
        'startDate' => 'datetime',
        'endDate' => 'datetime',
        'organization' => 'string',
        'pfeTitle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:3',
        'startDate' => 'required|min:3',
        'endDate' => 'required|min:3',
        'organization' => 'required|min:3'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function byDate(){
        //todo returns the list of formation Ordreb By End Date
    }

}
