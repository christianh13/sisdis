<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use DB;
use App\Http\Requests;

class SQLController extends Controller
{
    //

	public function main() {
		$uptimeQuery = DB::select("SHOW GLOBAL STATUS LIKE 'Uptime'")[0]->Value;
		$uptimeLinux = shell_exec('uptime');
		$teks = Test::where('id','=','1')->first();
		$teks->timestamp = $uptimeLinux;
		$result = $teks->teks . "<br>" . "Uptime from Linux: " . $teks->timestamp . "<br>" 
		. "Uptime from Query: " . $uptimeQuery;
		return $result;
	}
}

