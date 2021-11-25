<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'email_address', 'message'];

    public function getMailProvider(){
        $chiocciolina = strpos($this->email_address, "@");

        if ($chiocciolina){
            return substr($this->email_address, $chiocciolina + 1);
        } 
        return null;
    }
}
