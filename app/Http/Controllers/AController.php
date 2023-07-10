<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AController extends Controller
{
    protected $result;
    protected BaseController $baseController;

    public function __construct(BaseController $baseController)
    {
        $this->baseController = $baseController;
    }

    public function multiple($num)
    {
        $this->result += $this->baseController->plus($num) * 10;
        return $this->result;
    }
}
