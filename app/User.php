<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function scopeEmployeeID($query,$employee_id){
      if(!empty($employee_id)){
        $query = $query->where('employee_id',$employee_id);
      }
      return $query;
    }


    public function scopeID($query,$id){
      if(!empty($id)){
        $query = $query->where('id',$id);
      }
      return $query;
    }

    public function scopeName($query,$name){
      if(!empty($name)){
        $query = $query->where('name','like',"%$name%");
      }
      return $query;
    }

    public function scopeTel($query,$tel){
      if(!empty($tel)){
        $query = $query->where('user_phone_number','like',"%$tel%");
      }
      return $query;
    }

}
