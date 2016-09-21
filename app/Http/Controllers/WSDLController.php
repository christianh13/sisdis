<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WSDLController extends Controller
{
    	public function client(Request $request) {
		$mainmain = $request->input('strDikirim');
		$client = new SoapClient('/tugas3/spesifikasi.wsdl', array('soap_version' => SOAP_1_2,'trace' => 1 ));
		return $client->hello($mainmain);
	}

	public function hello(string $str) {
		return "Halo " . str;
	}

	public function server() {
		ini_set("soap.wsdl_cache_enabled", "0");
		$server = new SoapServer('/tugas3/spesifikasi.wsdl', array('soap_version' => SOAP_1_2));
		$server->addFunction("hello");
		$server->handle();
	}
}
