<?php 


Route::get('/display', 
 function(){
 	return view('Laraveldaily-Timezones::display');
 });

Route::get('timezones/{timezone?}', 
  'laraveldaily1\timezones1\TimezonesController@index');
 