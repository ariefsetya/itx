<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
class Kereta extends Model
{
    public function download($id)
    {
    	return sizeof(DB::table('logdatas')
                ->where('url', 'like', '%link_user_kereta/'.$id)
                ->groupBy('ip')
                ->get());	
    }
}
