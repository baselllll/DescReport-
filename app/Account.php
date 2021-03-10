<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = ['name','phone'];

    public function test(){
        return $this->hasMany(Test::class,'accountID','id');
    }
}
