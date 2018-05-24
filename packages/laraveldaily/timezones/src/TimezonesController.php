<?php

namespace Laraveldaily\Timezones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
