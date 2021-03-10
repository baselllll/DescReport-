<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $fillable = ['numtest','accountID'];

    public function account(){
        return $this->belongsTo(Account::class,'accountID','id');
    }
}
