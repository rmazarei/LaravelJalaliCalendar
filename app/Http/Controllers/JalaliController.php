<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jalali;

class JalaliController extends Controller
{
    public function index(){
		$date = date('Y m d');
		$jdate = new Jalali();
		// return $jdate->jdate('Y m d', '','','','en'); //OK
		// return $jdate->jstrftime('%Y'); //OK
		// return $jdate->jmktime(20, 20, 20); //OK
		 return $jdate->jgetdate(); //OK
		// return (int)$jdate->jcheckdate(21, 11, 1396); //OK
		// return $jdate->tr_num('12wed45', 'fa'); //OK
		// return $jdate->jdate_words(['rr'=>20, 'mm'=>5, 'ss'=>1396], ' '); //OK
		// return $jdate->gregorian_to_jalali(2017, 07, 21); //OK
		// return $jdate->jalali_to_gregorian(1396, 04, 30); //OK
		// return $jdate->jalali_to_gregorian(1396, 04, 30, '/); //OK

	}
}
