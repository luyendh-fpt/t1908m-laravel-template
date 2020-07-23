<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    public function roles(){
        return $this->belongsToMany('App\Role', 'accounts_roles', 'account_id', 'role_id');
    }
}
