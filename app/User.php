<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App\Models
 * @version October 24, 2019, 9:33 am UTC
 *
 * @property string firstname
 * @property string lastname
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 * @property integer departements_id
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    public $table = 'users';


    protected $dates = ['deleted_at'];



    public $guarded = [];

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
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'departements_id' => 'integer'
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
    ];

    public function Departement(){
        return $this->belongsTo(Departement::class);
    }
    public function interstings(){
        return $this->hasMany(Intersting::class);
    }
    public function Adress(){
        return $this->hasOne(Adress::class);
    }
    public function formations(){
        return $this->hasMany(Formation::class);
    }
    public function researchProjects(){
        return $this->hasMany(Researchproject::class);
    }
    public function supervising(){
        return $this->hasMany(Student::class);
    }

}
