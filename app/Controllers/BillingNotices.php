<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;

class BillingNotices extends ResourceController
{
    protected $modelName = 'App\Models\BillingNotice';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
}
