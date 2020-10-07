<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Company extends Controller
{
    function list(){
        $data=DB::table('');
        echo 'Here is the list';
    }
}
