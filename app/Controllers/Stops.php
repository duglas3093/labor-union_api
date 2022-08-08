<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;

class Stops extends ResourceController
{
    protected $modelName = 'App\Models\Stops';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll()   );
    }
}
