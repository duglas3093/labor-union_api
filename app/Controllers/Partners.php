<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;

class Partners extends ResourceController
{
    protected $modelName = 'App\Models\Partners';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
}
