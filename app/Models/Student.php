<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 * @package App\Models
 * @version October 25, 2019, 4:43 pm UTC
 *
 * @property string Title
 * @property integer suppervisingYear
 * @property string link
 * @property string firststudent
 * @property string secondstudent
 * @property string thirdstudent
 * @property integer user_id
 * @property integer typeencarement_id
 */
class Student extends Model
{
    use SoftDeletes;

    public $table = 'students';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Title',
        'suppervisingYear',
        'link',
        'firststudent',
        'secondstudent',
        'thirdstudent',
        'user_id',
        'typeencarement_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Title' => 'string',
        'suppervisingYear' => 'integer',
        'link' => 'string',
        'firststudent' => 'string',
        'secondstudent' => 'string',
        'thirdstudent' => 'string',
        'user_id' => 'integer',
        'typeencarement_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Title' => 'required|min:5',
        'suppervisingYear' => 'required|min:4',
        'link' => 'required|min:4',
        'firststudent' => 'required|min:3'
    ];

    public function supervisor(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function diplome()
    {
        return $this->hasOne(Typeencarement::class,'id','typeencarement_id');
    }
}
