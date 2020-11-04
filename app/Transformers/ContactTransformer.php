<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Entities\Contact;
use App\Contacts;
class ContactTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform(Contacts $model)
    {
        return [
            'id'         => (int) $model->id,
            'email'      => $model->email,
            'full_name'  => $model->full_name,
            // 'first_name' => $model->first_name,
            // 'last_name'  => $model->last_name,
            'address'    => $model->address,
            'phone_number'    => $model->phone_number,
            'phone_ct'   => $model->phone_ct,
            'fax'        => $model->fax,
            'note'       => $model->note,
            'type'       => (int) $model->type,
            'status'     => $model->status,
            'timestamps' => [
                'created_at' => $model->created_at,
                'updated_at' => $model->updated_at,
            ],
        ];
    }
}
