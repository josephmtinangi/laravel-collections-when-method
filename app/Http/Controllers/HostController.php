<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index()
    {
    	$hosts = User::get()->toArray();
    	
    	$inUsa = collect($hosts)
    				->where('location', 'USA')
    				->when(request('retired'), function ($collection) {
    					return $collection->reject(function($employee) {
    						return $employee['is_active'];
    					});
    				});

    	return $inUsa;
    }
}
