<?php

namespace App\Http\Controllers;

use VCComponent\Laravel\Contact\Repositories\ContactRepository;
use VCComponent\Laravel\Contact\Transformers\ContactTransformer;
use VCComponent\Laravel\Contact\Validators\ContactValidator;

class BaseController extends Controller
{
    protected $transformer;
    public function __construct(ContactRepository $repository, ContactValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        if (isset(config('contact.transformers')['contact'])) {
            $this->transformer = config('contact.transformers.contact');
        } else {
            $this->transformer = ContactTransformer::class;
        }
    }
}
