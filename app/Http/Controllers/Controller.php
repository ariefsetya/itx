<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Logdata;
use Auth;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Auth;

    public function __construct(Request $r)
	{
		date_default_timezone_set("Asia/Jakarta");
		//$this->middleware('auth');
		//echo "<pre>".print_r($_SERVER,1)."</pre>";
		$log = new Logdata();
		$log->idpengguna = Auth::check()?Auth::user()->id:0;
		$log->url = $r->url();
		$log->user_agent = $_SERVER['HTTP_USER_AGENT'];
		$log->ip = $_SERVER['REMOTE_ADDR'];
		$log->ip_port = isset($_SERVER['REMOTE_PORT'])?$_SERVER['REMOTE_PORT']:"";
		$log->http_host = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:"";
		$log->http_referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
		$log->pathinfo = isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:"";
		$log->save();

	}
}
