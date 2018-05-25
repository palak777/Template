<?php

namespace Laraveldaily1\Timezones1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone = NULL)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo $time->toDateTimeString();
    }

    public function store(Request $request){
    	
    }
}
