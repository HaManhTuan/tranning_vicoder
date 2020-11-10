<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use VCComponent\Laravel\Contact\Entities\ContactMeta;
use VCComponent\Laravel\Contact\Traits\ContactSchemaTrait;
class Contact extends Model
{
    use ContactSchemaTrait;
    protected $fillable = [
        'email',
        'full_name',
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'note',
        'type',
        'status'
    ];
    public function schema()
    {
        return [
            'fax' => [
                'type' => 'integer',
                'rule' => [],
            ],
            'phone_ct'    => [
                'type' => 'integer',
                'rule' => [],
            ],
            'company_address'    => [
                'type' => 'string',
                'rule' => [],
            ]
        ];
    }

    public function ableToUse($user)
    {
        return true;
    }

}
