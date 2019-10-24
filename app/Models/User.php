<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version October 24, 2019, 1:05 pm UTC
 *
 * @property string firstname
 * @property string lastname
 * @property string email
 * @property string|\Carbon\Carbon birthdate
 * @property string placeOfbirth
 * @property string wilaya
 * @property string phone
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 * @property integer departement_id
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';


    protected $dates = ['deleted_at'];



    public $guarded = [    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'birthdate' => 'datetime',
        'placeOfbirth' => 'string',
        'wilaya' => 'string',
        'phone' => 'string',
        'googleID' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'Photo' => 'string',
        'departement_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'birthdate' => 'required',
        'placeOfbirth' => 'required',
        'wilaya' => 'required',
        'phone' => 'required',
        'googleID' => 'required',

    ];


     public function Departement(){
        return $this->belongsTo(Departement::class);
    }

    public function interstings(){
        return $this->hasMany(Intersting::class);
    }


}
