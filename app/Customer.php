<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    private $fistName;
    private $lastName;

    protected $table="tb_customer";
    

}
