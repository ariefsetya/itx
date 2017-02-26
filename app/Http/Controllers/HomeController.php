<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function lokomotif($cc)
    {
        $data['search'] = \App\Kereta::where('jenis','lokomotif')->where('open','1')->whereStatus(!'Private')->where('subjenis',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Lokomotif ".$cc;
        $data['point'] = 2;
        return view('blogs-kereta')->with($data);
    }
    public function kereta($cc)
    {
        $data['search'] = \App\Kereta::where('jenis','kereta')->where('open','1')->whereStatus(!'Private')->where('subjenis',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Kereta ".$cc;
        $data['point'] = 2;
        return view('blogs-kereta')->with($data);
    }
    public function gerbong($cc)
    {
        $data['search'] = \App\Kereta::where('jenis','gerbong')->where('open','1')->whereStatus(!'Private')->where('subjenis',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Gerbong ".$cc;
        $data['point'] = 2;
        return view('blogs-kereta')->with($data);
    }
    public function rute($cc)
    {
        $data['search'] = \App\Rute::where('open','1')->whereStatus(!'Private')->where('status',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Rute ".str_replace(array('free','plu','pay','private'), array('Freeware','Private Limited User','Payware','Private'), $cc);
        $data['point'] = 2;
        return view('blogs-rute')->with($data);
    }
    public function objek($cc)
    {
    	$data['search'] = \App\Objek::where('open','1')->whereStatus(!'Private')->where('status',$cc)->orderBy('updated_at','desc')->paginate(12);
    	$data['query'] = "Objek ".str_replace(array('free','plu','pay','private'), array('Freeware','Private Limited User','Payware','Private'), $cc);
    	$data['point'] = 2;
    	return view('blogs-objek')->with($data);
    }

    public function login(Request $r)
    {
        $code = $r->input('code');

        $curl = new \Curl\Curl();
        $curl->get('https://graph.accountkit.com/v1.1/access_token',array(
            'grant_type' => 'authorization_code',
            'code' => $code,
            'access_token' => 'AA|1738905326439099|8915d427247f663421c900f4cb25df0f'
        ));
        
        if ($curl->error) {
            echo $curl->error_code;
        }
        else {
            $response = $curl->response;
        }

        $decoded_json = json_decode($response);
        $access_token = $decoded_json->access_token;



        $curl = new \Curl\Curl();
        $curl->get('https://graph.accountkit.com/v1.1/me',array(
            'access_token' => $access_token,
        ));
        
        if ($curl->error) {
            echo $curl->error_code;
        }
        else {
            $response = $curl->response;
        }

        $decoded_json = json_decode($response);
        $phone = "0".$decoded_json->phone->national_number;

        $a = \App\User::where('phone',$phone)->get();
        if(sizeof($a)>0){
            Auth::loginUsingId($a[0]->id, true);

            return redirect()->route('member');
        }else{
            return redirect()->route('home')->with(array('msg'=>'Login Failed, your phone number is not registered','title'=>'Login Failed'));
        }

    }
    public function request(Request $r)
    {
        $this->validate($r,[
            'email' => 'required|email|unique:users',
            'phone' => 'required|regex:/(08)[0-9]{9}/|unique:users',
            ]);

        $s = new \App\User;
        $s->name = $r->name;
        $s->email = $r->email;
        $s->phone = $r->phone;
        $s->fb = $r->fb;
        $s->photo = "";
        $s->reason = $r->reason;
        $ts['2009'] = isset($r->tsver_2009)?"Ya":"Tidak";
        $ts['2010'] = isset($r->tsver_2010)?"Ya":"Tidak";
        $ts['2012'] = isset($r->tsver_2012)?"Ya":"Tidak";
        $ts['TANE'] = isset($r->tsver_tane)?"Ya":"Tidak";
        $s->ori = isset($r->ori)?1:0;
        $s->tsver = json_encode($ts);
        $s->brand = trim($r->brand)!=""?$r->brand:"";
        $s->url = trim($r->url)!=""?$r->url:"";
        $s->password = bcrypt('admin');
        $s->save();

        return redirect()->route('home')->with(array('msg'=>'Register Success, please wait until we approve your account ;)','title'=>'Register Success'));
    }

    public function member()
    {
        echo "<pre>".print_r(Auth::user(),1)."</pre>";
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with(array('msg'=>'Logout Success, see you again :)','title'=>'Logout Success'));

    }

}
