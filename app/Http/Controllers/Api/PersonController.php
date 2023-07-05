<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;

class PersonController extends Controller
{
    function index() {
        return [
            'name' => 'Abigail',
            'state' => 'CA',
        ];
    }
}
