<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function accounts(){
        return $this->belongsToMany('App\Account', 'accounts_roles', 'role_id', 'account_id');
    }
}
