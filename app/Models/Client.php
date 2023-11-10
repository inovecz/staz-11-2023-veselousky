<?php

namespace App\Models;

class Client extends Model
{

    public $routesPrefix = 'clients';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone_number',
        'verification',
        'request',
        'request_message',
        'file',

    ];
    public function getName()
    {  
        return $this->name;
    }


}
