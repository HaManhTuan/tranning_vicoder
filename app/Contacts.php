<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use VCComponent\Laravel\Contact\Entities\Contact;
class Contacts extends Contact
{

    protected $fillable = [
        'email',
        'full_name',
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'note',
        'type',
        'status',
        'phone_ct',
        'fax'
    ];

    public function ableToUse($user)
    {
        return true;
    }
}
