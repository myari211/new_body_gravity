<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = "attendances";

    protected $fillable = [
        'id',
        'customer_id',
        "trainer_id",
        "package_id",
        "status",
        "token",
    ];


    public $incrementing = false;
}
