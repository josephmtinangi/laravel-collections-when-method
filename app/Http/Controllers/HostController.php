<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index()
    {
    	$hosts = User::get();
    	dd($hosts);
    }
}
