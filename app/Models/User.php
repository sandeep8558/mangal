<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class User extends Authenticatable
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'password',
        'role',
        'status',
        'api_token',
        'token_expire_at',
        'otp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdministrator(){
        if(($this->role == 'Administrator' && $this->status == 'Active')){
            return true;
        }
        return false;
    }

    public function isStaff() {
        if(($this->role == 'Staff' && $this->status == 'Active')){
            return true;
        }
        return false;
    }

    public function isFaculty(){
        if(($this->role == 'Faculty' && $this->status == 'Active')){
            return true;
        }
        return false;
    }

    public function isStudent(){
        if(($this->role == 'Student' && $this->status == 'Active')){
            return true;
        }
        return false;
    }

    public function staff(){
        return $this->hasOne("App\Models\Staff", 'email', 'email');
    }

}
